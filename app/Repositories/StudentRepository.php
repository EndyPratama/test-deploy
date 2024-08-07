<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class StudentRepository
{
    public static function getList()
    {
        $data = DB::table('student')
            ->where('is_deleted', 0)
            ->get();

        return collect($data);
    }
}
