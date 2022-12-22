<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;
use App\Http\Requests\StudentRequest;
class StudentController extends Controller
{
    public function Home()
    {
        $result = StudentModel::all();
        return view('welcome',["data"=>$result]) ;

    }

    

    public function OnInsert(Request $request)
    {
       $name = $request->input('name');
       $roll = $request->input('roll');
       $mobile = $request->input('mobile');
       $data =['name'=>$name,'roll'=>$roll,'mobile'=>$mobile];
       $result = StudentModel::insert($data);
      if($result){
         return redirect('/'); 
      }else{
        echo "<h1>data not inserted </h1>";
      }

    }

    public function OnDetails($id)
    {
     $result = StudentModel::find($id);
         return view('Pages.View',["data"=>$result]);
    }
       
    public function Edit($id)
    {
      $result['data'] = StudentModel::find($id);
      
      return view('Pages.Edit',$result);

    }






    public function Destroy($id)
    {
       StudentModel::find($id)->delete();
       return redirect('/'); 
        

    }
}
