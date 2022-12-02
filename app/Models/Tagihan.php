<?php

namespace App\Models;

use CodeIgniter\Model;

class Tagihan extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tagihan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama_mahasiswa',
        'status_tagihan',
        'total_tagihan'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function getGrafik()
    {
        return $this->findAll();
    }

    public function getAll()
    {
        $builder = $this->db->table('tagihan');
        $builder->join('users', 'users.id_user = tagihan.nama_mahasiswa');
        $query = $builder->get();

        return $query->getResult();
    }
}
