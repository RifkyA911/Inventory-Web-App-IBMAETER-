<?php

namespace App\Models;

use CodeIgniter\Model;

class userActivity_Model extends Model
{
    protected $table = 'user_activity';
    protected $primaryKey = 'id_aktivitas';
    protected $allowedFields = ['uid_aktivitas', 'aktivitas', 'waktu_aktivitas'];

    public function getActivity($uid = false)
    {
        if ($uid == false) {
            return $this->findAll();
        } else {
            return $this->where(['uid_aktivitas' => $uid])->findAll();
        }
    }
}
