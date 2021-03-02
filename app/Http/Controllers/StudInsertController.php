<?php
namespace App\Http\Controllers;
use App\StudInsert;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StudInsertController extends Controller
{
    
    public function insert(){
        $urlData = getURLList();
        return view('stud_create');
    }
    public function create(Request $request){
        $rules = [
			'first_name' => 'required|string|min:3|max:255',
			'city_name' => 'required|string|min:3|max:255',
			'email' => 'required|string|email|max:255'
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}
		else{
            // dd($request->all());
            $data = $request->input();
			try{
				$student = new StudInsert;
                $student->first_name = $data['first_name'];
                $student->last_name = $data['last_name'];
				$student->city_name = $data['city_name'];
				$student->email = $data['email'];
				$student->save();
				return redirect('insert')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('insert')->with('failed',"operation failed");
			}
		}
    }
}