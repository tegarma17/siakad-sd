<?php
namespace App\Models;

use CodeIgniter\Model;

class Modelsiswa extends Model
{
    protected $table = 'tb_siswa';
    public function tampildata($id = false)
    {
        if($id === false) {
            return $this->findAll();


        }else{
            return $this->getWhere(['nisn'=>$id]);
        }
    }
    public function saveSiswa($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editSiswa($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('nisn', $id);
        return $builder->update($data);
    }

    public function hapusSiswa($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['nisn' => $id]);
        
    }
}