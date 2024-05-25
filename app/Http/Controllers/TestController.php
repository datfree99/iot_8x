<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function pressure()
    {
        $data = [];
        $startTimestamp = strtotime('2024-05-10');
        $endTimestamp = strtotime('2024-05-25');
        $i = 20;
        for ($j = 0; $j <= $i; $j++) {
            $randomTimestamp = mt_rand($startTimestamp, $endTimestamp);
            $data[$j] = [
                'id' =>  $j,
                'measuringPoint' =>  "Trạm số ". ($j + 1),
                'updateTime' =>  date('Y-m-d', $randomTimestamp),
                'status' =>  (string)  mt_rand(1, 10) % 2 == 1 ? 'Active' : 'Inactive',
                'pressure' =>  (string)   round((mt_rand() / mt_getrandmax()) * mt_rand(1, 10), 3),
                'waterFlow' =>  (string)   round((mt_rand() / mt_getrandmax()) * mt_rand(1, 10), 3),
                'dailyOutput' =>  (string)   round((mt_rand() / mt_getrandmax()) * mt_rand(1, 10), 3),
                'total' =>  (string)   round((mt_rand() / mt_getrandmax()) * mt_rand(1, 10), 3),
            ];
        }

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function yield()
    {
        $currentDate = Carbon::now();
        $data = [];
        for ($i = 0; $i <= $currentDate->day; $i++){
            $data[] = [
                'date' => (string) $i,
                'quantity' =>  mt_rand(40, 300)
            ];
        }

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    function generateRandomString($length = 20) {
        // Chuỗi nguồn chứa các ký tự có thể xuất hiện trong chuỗi ngẫu nhiên
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);

        // Kiểm tra độ dài yêu cầu có lớn hơn chiều dài chuỗi nguồn không
        if ($length > $charactersLength) {
            $length = $charactersLength;
        }

        // Sử dụng str_shuffle để xáo trộn chuỗi nguồn
        $randomString = str_shuffle($characters);

        // Cắt chuỗi ngẫu nhiên theo độ dài yêu cầu
        return substr($randomString, 0, $length);
    }

}
