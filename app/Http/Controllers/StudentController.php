<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Services\StudentService;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function listStudent()
    {
        $res = ['status' => 200];
        try {
            $res['data'] = StudentService::getList();
        } catch (Exception $e) {
            $res = [
                'status' => 500,
                'error' => $e->getMessage()
            ];

            return response()->json($res, $res['status']);
        }

        return response()->json($res, $res['status']);
    }
}
