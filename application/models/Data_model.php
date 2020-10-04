<?php

class Data_model extends CI_Model
{
    private $table_prodi = 'prodi';

    private $schema = [
        'prodi.id',
        'prodi.nama',
        'jurusan.nama AS jurusan',
        'prodi.created',
        'prodi.updated'
    ];

    public function getProdi($get = null)
    {
        $where = array_filter([
            'prodi.id' => !empty($get['id']) ? $get['id'] : null,
            'prodi.jurusan' => !empty($get['id_jurusan']) ? $get['id_jurusan'] : null,
        ]);

        $like = array_filter([
            'prodi.nama' => !empty($get['nama']) ? $get['nama'] : null,
            'jurusan.nama' => !empty($get['jurusan']) ? $get['jurusan'] : null,
        ]);

        if (!empty($get['order_asc'])) {
            $this->db->order_by($get['order_asc'], 'ASC');
        }
        if (!empty($get['order_desc'])) {
            $this->db->order_by($get['order_desc'], 'DESC');
        }

        return $this->db->select($this->schema)
            ->join('jurusan', 'prodi.jurusan = jurusan.id', 'left')
            ->where($where)
            ->like($like)
            ->get($this->table_prodi)->result();
    }
}
