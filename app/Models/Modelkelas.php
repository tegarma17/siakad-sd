<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelkelas extends Model
{
    protected $table = 'tb_kelas';
    function __construct()
    {
        $this->db = db_connect();
    }
    public function tampildata($id = false)
    {
        if ($id === false) {
            return $this->table('tb_kelas')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('tb_kelas')
                ->where('kelas_id', $id)
                ->get()
                ->getRowArray();
        }
    }
    public function saveKelas($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
}
