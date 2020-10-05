<?php

function checkloginstate()
{
    $ci = get_instance();
    if (!empty(get_cookie('account')) && !empty(get_cookie('token'))) {
        $email = get_cookie('account', true);
        $token = get_cookie('token', true);
        $session = $ci->db->get_where('sessions', ['session_email' => $email])
            ->row();
        if (password_verify($token, $session->session_token) == true) {
            if (now() > strtotime($session->session_expiry)) {
                delete_cookie('account');
                delete_cookie('token');
                return false;
            } else {
                // return true;
                $userdb = $ci->db->get_where('users', ['user_id' => $session->session_userid])->row_array();
                $user = json_decode($ci->curl->simple_get(getenv('REST_SERVER') . '/mahasiswa?access_token=' . getenv('REST_TOKEN') . '&npm=' . $userdb['user_npm']), true);
                return json_decode(json_encode(array_merge($userdb, $user['data'][0])));
            }
        } else {
            delete_cookie('account');
            delete_cookie('token');
            return false;
        }
    } else {
        delete_cookie('account');
        delete_cookie('token');
        return false;
    }
}

function setloginstate($userid, $email, $expiry = (30 * 24 * 60 * 60))
{
    $ci = get_instance();
    $token = hash('sha256', random_bytes(5));
    $session = [
        'session_userid' => $userid,
        'session_email' => $email,
        'session_token' => password_hash($token, PASSWORD_DEFAULT),
        'session_expiry' => date('Y-m-d H:i:s', now() + $expiry),
        'session_date' => date('Y-m-d H:i:s', now())
    ];
    $residu = $ci->db->get_where('sessions', ['session_email' => $email])
        ->row();
    if ($residu) {
        $ci->db->where('session_userid', $userid)
            ->update('sessions', $session);
        if ($ci->db->affected_rows() > 0) {
            set_cookie('account', $email, $expiry);
            set_cookie('token', $token, $expiry);
            return true;
        } else {
            return false;
        }
    } else {
        $ci->db->insert('sessions', $session);
        if ($ci->db->affected_rows() > 0) {
            set_cookie('account', $email, $expiry);
            set_cookie('token', $token, $expiry);
            return true;
        } else {
            return false;
        }
    }
}

function setlogoutstate()
{
    delete_cookie('account');
    delete_cookie('token');
    return true;
}

function getuserdata()
{
}
