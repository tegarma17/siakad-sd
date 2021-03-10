<?php
namespace App\Models;

use CodeIgniter\Model;

class Modelmapel extends Model
{
    protected $table = 'tb_mapel';
    public function tampildata($id = false)
    {
        if($id === false) {
            return $this->findAll();


        }else{
            return $this->getWhere(['mapel_id'=>$id]);
        }
    }
    public function saveMapel($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editMapel($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('mapel_id', $id);
        return $builder->update($data);
    }

    public function hapusMapel($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['mapel_id' => $id]);
        
    }
}