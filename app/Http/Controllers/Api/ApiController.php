<?php

namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ApiController extends BaseController
{
    public function test(Request $request)
    {
        if (!empty($request->name)) {
            $other = [
                'name' => $request->name,
                'tel' => $request->tel ?: '00000'
            ];
        }
        echo json_encode([
            'status' => 'success',
            'data'    => [
                [
                    'name' => 'aaaa',
                    'tel'  => '1232131312',
                ],
                $other
            ],
            'msg' => 'ok'
        ]);
    }
}
