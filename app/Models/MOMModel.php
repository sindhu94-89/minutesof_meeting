<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\minutesofmeeting;


class MOMModel extends Model
{
    use HasFactory;
    public function createPost($request){
        $data = ['meeting_name' => $request['meeting_name'],'description' => $request['description'], 'meeting_date' => $request['meeting_date'], 'meeting_time' => $request['meeting_time']
        ];
        $user = minutesofmeeting::create($data);
        return ['status_code' => 200, 'message' => 'MOM created'];
    }
    public function getMOM(){
        /*$result = minutesofmeeting::select('meeting_name','description', 'meeting_date', 'meeting_time')->get();*/
        $result = minutesofmeeting::all();
        return $result;
    }
    public function updateMOM($id){
        $result = minutesofmeeting::find($id);
        return $result;
    }
    public function updateMOMPost($request){
        $result = minutesofmeeting::find($request['id']);
        $result->meeting_name = $request['meeting_name'];
        $result->description = $request['description'];
        $result->meeting_date = $request['meeting_date'];
        /*$result->meeting_time = $request['meeting_time'];*/
        $result->summary = $request['summary'];

        /*$data = ['meeting_name' => $result['meeting_name'],'description' => $result['description'], 'meeting_date' => $result['meeting_date'], 'meeting_time' => $result['meeting_time']
        ];*/
        $result->save();
        /*return ['status_code' => 200, 'message' => 'MOM updated'];*/
    }
    public function deleteactionMOM($id){
        $delete = minutesofmeeting::find($id);
        $delete->delete();
        return ['status_code' => 200, 'message' => 'MOM deleted'];
    }
}
