<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelkelas extends Model
{
    protected $table = 'tb_kelas';
    public function tampildata($id = false)
    {
        if ($id === false) {
            return $this->findAll();
                
        } else {
            return $this->getWhere(['kelas_id'=>$id]);
        }
    }
    public function saveKelas($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editKelas($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('kelas_id', $id);
        return $builder->update($data);
    }

    public function hapusKelas($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['kelas_id' => $id]);
        
    }
}