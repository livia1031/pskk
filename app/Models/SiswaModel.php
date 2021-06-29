<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'nisn', 'alamat', 'tgl', 'jeniskelamin', 'agama', 'status_pendaftaran', 'mtk', 'bing', 'photo'];

    public function getSiswa($nama = false)
    {
        if ($nama == false) {
            return $this->findAll();
        }
        return $this->where(['nama' => $nama])->first();
    }

    public function getStatus($name)
    {
        return $this->select('status_pendaftaran')->where(['nama' => $name])->first();
    }


    public function checkUser($nama)
    {
        return $this->select('nama')
            ->where('nama', $nama)
            ->first();
    }
}
