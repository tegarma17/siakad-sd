<?php
namespace App\Models;

use CodeIgniter\Model;

class Modelguru extends Model
{
    protected $table = 'tb_guru';
    public function tampildata($id = false)
    {
        if($id === false) {
            return $this->findAll();


        }else{
            return $this->getWhere(['nip'=>$id]);
        }
    }
    public function saveGuru($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editGuru($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('nip', $id);
        return $builder->update($data);
    }

    public function hapusGuru($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['nip' => $id]);
        
    }
}