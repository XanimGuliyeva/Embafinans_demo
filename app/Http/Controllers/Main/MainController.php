<?php

namespace App\Http\Controllers\Main;

use App\Applies\Applies;
use App\Credit\Credit_Apply;
use App\Http\Controllers\Controller;
use App\Http\Requests\Applies\ApplyRequest;
use App\Http\Requests\Credit\CreditRequest;
use App\Http\Requests\User\EditUserRequest;
use App\Http\Requests\User\UserRequest;
use App\Users\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function add_credit_apply(CreditRequest $request)
    {
        $add_credit_apply = new Credit_Apply();
        $add_credit_apply->product_id = $request->id;
        $add_credit_apply->purpose = $request->purpose;
        $add_credit_apply->amount = $request->amount;
        $add_credit_apply->term = $request->term;
        $add_credit_apply->monthly_payment = $request->monthly_payment;
        $add_credit_apply->organization = $request->organization;
        $add_credit_apply->position = $request->position;
        $add_credit_apply->work_term = $request->work_term;
        $add_credit_apply->monthly_salary = $request->monthly_salary;
        $add_credit_apply->address = $request->address;
        $add_credit_apply->register_address = $request->register_address;
        $add_credit_apply->birthday = $request->birthday;
        $add_credit_apply->home_phone = $request->home_phone;
        $add_credit_apply->mobile_phone = $request->mobile_phone;
        $add_credit_apply->work_phone = $request->work_phone;
        $add_credit_apply->long_name = $request->long_name;
        $add_credit_apply->email = $request->email;
        $add_credit_apply->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function delete_credit_apply(Request $request)
    {
        $id = $request->id;
        $delete_credit_apply = Credit_Apply::find($id);
        $delete_credit_apply->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_apply(ApplyRequest $request)
    {
        $add_apply = new Applies();
        $add_apply->name = $request->name;
        $add_apply->surname = $request->surname;
        $add_apply->phone = $request->phone;
        $add_apply->email = $request->email;
        if ($request->hasfile('cv')){
            $file = $request->file('cv');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/files/', $filename);
            $add_apply->cv = $filename;
        }
        $add_apply->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function delete_apply(Request $request)
    {
        $id = $request->id;
        $delete_apply = Applies::find($id);
        $delete_apply->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_user(EditUserRequest $request)
    {
        $edit_users = Users::find(Auth::id());
        if ($request->password != ''){
            $edit_users->password = Hash::make($request->password);
        }
        $edit_users->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_user(UserRequest $request)
    {
        $add_users = new Users();
        $add_users->email = $request->email;
        $add_users->phone = $request->phone;
        $add_users->fin = $request->fin;
        $add_users->password = Hash::make($request->password);
        do
        {
            $code = rand(1000000, 9999999);
            $user_code = Users::where('user_code', $code)->get();
        }
        while(!$user_code->isEmpty());
        $add_users->user_code = $code;
        $add_users->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }
}
