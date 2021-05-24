<?php

namespace App\Models;

use CodeIgniter\Model;

class ArsipKomp_Model extends Model
{
    protected $table = 'komplain_arsip';
    // protected $primaryKey = 'no_arsipKomp';
    protected $allowedFields = ['no_arsipKomp', 'uid_arsipKomp', 'email_arsipKomp', 'judul_arsipKomp', 'isi_arsipKomp', 'foto_arsipKomp', 'waktu_arsipKomp', 'status_arsipKomp', 'comment_arsipKomp', 'commented_at'];

    public function getAll()
    {
        return $this->findAll();
    }

    public function getJoinUser()
    {
        $builder = $this->db->table('komplain_arsip');
        $builder->select('id_arsipKomp, no_arsipKomp, user.nama, judul_arsipKomp, isi_arsipKomp, foto_arsipKomp, waktu_arsipKomp, status_arsipKomp, comment_arsipKomp, commented_at');
        $builder->join('user', 'user.uid = komplain_arsip.uid_arsipKomp', 'left');
        $query = $builder->get()->getResultArray();
        return $query;
    }

    public function addArsip($data)
    {
        $query = $this->db->table('komplain_arsip')->insert($data);
        return $query;
    }

    // public function getHold($uid)
    // {
    //     return $this->where(['status_arsipKomp' => 'hold'])->findAll();
    // }

    public function getIdArsipKomp($id)
    {
        $builder = $this->db->table('komplain_arsip');
        $builder->select('id_arsipKomp, no_arsipKomp, user.nama, judul_arsipKomp, isi_arsipKomp, foto_arsipKomp, waktu_arsipKomp');
        $builder->join('user', 'user.uid = komplain_arsip.uid_arsipKomp');
        $builder->where(['id_arsipKomp' => $id]);
        $query = $builder->get()->getResultArray();
        return $query;
        // return $this->where(['id_arsipKomp' => $id])->first();
    }

    public function getUidAdminArsipKomp($id)
    {
        $builder = $this->db->table('komplain_arsip');
        $builder->select('user.nama, id_arsipKomp, uid_arsipKomp_admin, status_arsipKomp, comment_arsipKomp, commented_at');
        $builder->join('user', 'user.uid = komplain_arsip.uid_arsipKomp_admin');
        $builder->where(['id_arsipKomp' => $id]);
        $query = $builder->get()->getResultArray();
        return $query;
    }

    public function getAccept()
    {
        return $this->where(['status_arsipKomp' => 'accepted'])->findAll();
    }

    public function getRejected()
    {
        return $this->where(['status_arsipKomp' => 'declined'])->findAll();
    }
}
