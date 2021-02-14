<?php

function checkloginstate()
{
    $ci = get_instance();
    if (!empty(get_cookie('account')) && !empty(get_cookie('token'))) {
        $email = get_cookie('account', true);
        $token = get_cookie('token', true);
        $session = $ci->db->get_where('sessions', ['email_session' => $email])
            ->row();
        if (password_verify($token, $session->token_session) == true) {
            if (now() > strtotime($session->expiry_session)) {
                delete_cookie('account');
                delete_cookie('token');
                return false;
            } else {
                // return true;
                $user = $ci->db
                    ->join('mahasiswas', 'users.email_user = mahasiswas.email_mahasiswa')
                    ->join('semesters', 'mahasiswas.semester_mahasiswa = semesters.id_semester')
                    ->join('prodis', 'semesters.prodi_semester = prodis.id_prodi')
                    ->join('jurusans', 'prodis.jurusan_prodi = jurusans.id_jurusan')
                    ->get_where('users', ['email_user' => $session->email_session])->row();
                return $user;
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

function setloginstate($email, $expiry = (90 * 24 * 60 * 60))
{
    $ci = get_instance();
    $token = hash('sha256', random_bytes(5));
    $session = [
        'email_session' => $email,
        'token_session' => password_hash($token, PASSWORD_DEFAULT),
        'expiry_session' => date('Y-m-d H:i:s', now() + $expiry),
        'date_session' => date('Y-m-d H:i:s', now())
    ];
    $residu = $ci->db->get_where('sessions', ['email_session' => $email])
        ->row();
    if ($residu) {
        $ci->db->where('email_session', $email)
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
