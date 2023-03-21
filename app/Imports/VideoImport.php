<?php

namespace App\Imports;

use App\Models\Video;
use Maatwebsite\Excel\Concerns\ToModel;

class VideoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Video([
            'id' => $row[1],
            'title' => $row[2], 
            'url' => $row[3], 
        ]);
    }
}
