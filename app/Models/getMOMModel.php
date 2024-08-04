<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\momModel;

class getMOMModel extends Model
{
    use HasFactory;
    public function getMOM(){
        $result = momModel::select('meeting_name','description', 'meeting_date', 'meeting_time')->get();
        return $result;
        /*$result = momModel::all();*/
        print_r($restult);
    }
}
