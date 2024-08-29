<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\minutesofmeeting;
use Illuminate\Support\Facades\Storage;
use File;

class MOMModel extends Model
{
    use HasFactory;
    public function createPost($request){
        $image = $request['image'];
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'), $imageName);
        $image_url = 'images/'.$imageName;
        $data = ['meeting_name' => $request['meeting_name'],'description' => $request['description'], 'meeting_date' => $request['meeting_date'], 'meeting_time' => $request['meeting_time'], 'image_name' => $image_url
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
        $result->meeting_name = $request->meeting_name;
        $result->description = $request->description;
        $result->meeting_date = $request->meeting_date;
        /*$result->meeting_time = $request['meeting_time'];*/
        $result->summary = $request->summary;
        
        $destination = public_path().'/'.$result->image_name;
        if (File::exists($destination)) {
            unlink($destination);
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move(public_path('images'), $filename);
        $image_url = 'images/'.$filename;
        $result->image_name = $image_url;
        
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
