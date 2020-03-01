<?php

namespace App\Services;

use Illuminate\Support\Str;

class StringTask
{

    public function makeStrUpper($str)
    {
        return strtoupper($str);
    }

    public function alternateCase($str)
    {
        $data = '';
        for ($i = 0; $i < strlen($str); $i++) {
            if (($i % 2) == 1) {
                $data = $data . strtoupper($str[$i]);
            } else {
                $data = $data . strtolower($str[$i]);
            }
        }

        return $data;
    }

    public function makeCSV($str)
    {
        $dir = './csv';
        if (!is_dir($dir))
            mkdir($dir, 0755, true);
        $data = array();
        for ($i = 0; $i < strlen($str); $i++) {
            $data[] = $str[$i];
        }
        $random = Str::random(10);
        $file = fopen($dir . '/' . $random . '-file.csv', 'w');
        fputcsv($file, $data, ",");
        fclose($file);

        return "CSV Created";
    }
}
