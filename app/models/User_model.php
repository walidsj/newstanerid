<?php

class User_model extends CI_Model
{
    private $schema = [
        'mahasiswa.id', 'mahasiswa.nama', 'npm', 'email', 'gender', 'daerah', 'prodi.nama AS prodi', 'jurusan.nama AS jurusan', 'angkatan', 'whatsapp', 'line', 'foto', 'created', 'updated'
    ];

    private $schema_where = [
        'id' => null,
        'npm' => null,
        'email' => null,
        'gender' => null,
        'prodi' => null,
        'angkatan' => null,
        'status' => 1
    ];

    private $schema_like = [
        'nama' => null,
        'daerah' => null
    ];

    public function getMahasiswa($get = null)
    {
        //define like dan where
        $like = array_filter(array_merge($this->schema_like, array_intersect_key($get, $this->schema_like)));
        $where = array_filter(array_merge($this->schema_where, array_intersect_key($get, $this->schema_where)));

        //querying
        if (!empty($get['order_asc'])) {
            $this->db->order_by($get['order_asc'], 'ASC');
        }
        if (!empty($get['order_desc'])) {
            $this->db->order_by($get['order_desc'], 'DESC');
        }
        return $this->db->select($this->schema)
            ->join('prodi', 'mahasiswa.prodi = prodi.id')
            ->join('jurusan', 'prodi.jurusan = jurusan.id')
            ->where($where)
            ->like($like)
            ->get('mahasiswa')->result();
    }
}
