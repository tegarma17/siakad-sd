<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeltahunajaran extends Model{

    protected $table = 'tb_tahun_ajaran';
    public function tampildata($id = false)
    {
        if($id === false) {
            return $this->findAll();
        
        
        }else{
            return $this->getWhere(['id_tahun_ajaran' => $id]);

        }
    }

        public function saveTahunajaran($data)
        {
            $builder = $this->db->table($this->table);
            return $builder->insert($data);
        }

        public function editTahunajaran($data,$id)
        {
            $builder = $this->db->table($this->table);
            $builder->where('id_tahun_ajaran', $id);
            return $builder->update($data);
        }

        public function hapusTahunajaran($id)
        {
            $builder = $this->db->table($this->table);
            return $builder->delete(['id_tahun_ajaran' => $id]);
        }
    }