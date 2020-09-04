<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function insert()
    {
        $json = file_get_contents(storage_path('app/public/records.json'));
        $obj = json_decode($json, true)['RECORDS'];
        $insert_data = collect();

        foreach ($obj as $value) {
            $insert_data->push($value);
        }
        \DB::table('records')->truncate();
        foreach ($insert_data->chunk(500) as $chunk) {
            \DB::table('records')->insert($chunk->toArray());
        }
        return 'Done';
    }
}
