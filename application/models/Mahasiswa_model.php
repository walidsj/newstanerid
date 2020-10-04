<?php

class Mahasiswa_model extends CI_Model
{
    private $table = 'mahasiswa';

    private $schema = [
        'mahasiswa.id',
        'mahasiswa.nama',
        'mahasiswa.npm',
        'mahasiswa.gender',
        'prodi.nama AS prodi',
        'mahasiswa.prodi_id',
        'jurusan.nama AS jurusan',
        'jurusan.id AS jurusan_id',
        'mahasiswa.angkatan',
        'mahasiswa.status',
        'mahasiswa.created',
        'mahasiswa.updated'
    ];

    public function getMahasiswa($get = null)
    {
        $where = array_filter([
            'mahasiswa.id' => !empty($get['id']) ? $get['id'] : null,
            'mahasiswa.npm' => !empty($get['npm']) ? $get['npm'] : null,
            'mahasiswa.gender' => !empty($get['gender']) ? $get['gender'] : null,
            'mahasiswa.angkatan' => !empty($get['angkatan']) ? $get['angkatan'] : null,
            'mahasiswa.status' => !empty($get['status']) ? $get['status'] : null,
            'prodi.id' => !empty($get['prodi_id']) ? $get['prodi_id'] : null,
            'jurusan.id' => !empty($get['jurusan_id']) ? $get['jurusan_id'] : null,
        ]);

        $like = array_filter([
            'mahasiswa.nama' => !empty($get['nama']) ? $get['nama'] : null,
            'prodi.nama' => !empty($get['prodi']) ? $get['prodi'] : null,
            'jurusan.nama' => !empty($get['jurusan']) ? $get['jurusan'] : null,
        ]);

        if (!empty($get['order_asc'])) {
            $this->db->order_by($get['order_asc'], 'ASC');
        }
        if (!empty($get['order_desc'])) {
            $this->db->order_by($get['order_desc'], 'DESC');
        }

        return $this->db->select($this->schema)
            ->join('prodi', 'mahasiswa.prodi_id = prodi.id', 'left')
            ->join('jurusan', 'prodi.jurusan_id = jurusan.id', 'left')
            ->where($where)
            ->like($like)
            ->get($this->table)->result();
    }

    public function postMahasiswa($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }

    public function deleteMahasiswa($id)
    {
        $this->db->delete($this->table, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function putMahasiswa($put)
    {
        $data = array_filter([
            'nama' => !empty($put['nama']) ? $put['nama'] : null,
            'npm' => !empty($put['npm']) ? $put['npm'] : null,
            'gender' => !empty($put['gender']) ? $put['gender'] : null,
            'prodi' => !empty($put['prodi_id']) ? $put['prodi_id'] : null,
            'angkatan' => !empty($put['angkatan']) ? $put['angkatan'] : null,
            'status' => !empty($put['status']) ? $put['status'] : null,
            'updated' => $put['updated'],
        ]);

        $this->db->update($this->table, $data, ['id' => $put['id']]);
        return $this->db->affected_rows();
    }
}
