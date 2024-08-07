<?php

namespace App\Services;

use Exception;
use InvalidArgumentException;
use App\Repositories\StudentRepository;
class StudentService
{
    public static function getList()
    {
        try {
            $data = json_decode(json_encode(StudentRepository::getList()));
        } catch (Exception $e) {
            throw new InvalidArgumentException('Gagal ambil list student karena : ' . $e->getMessage());
        }

        return $data;
    }
}
