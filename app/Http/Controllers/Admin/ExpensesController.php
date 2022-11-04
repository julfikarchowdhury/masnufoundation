<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use Auth;
class ExpensesController extends Controller
{
    public function all_expenses(){
        $expenses = Expense::query()->get();
        return view('admin.expenses.all_expenses',compact('expenses'));
    }
    public function my_expenses(){
        $email=Auth::guard('admin')->user()->email;  
        $expenses = Expense::where('email',$email)->get();
        return view('admin.expenses.my_expenses',compact('expenses'));
    }
    public function add_expenses(Request $request,$id=NULL){
        
        $title = "Add Expenses";
        $expenses = new Expense;
        $message = "Project added successfully!";
        
        if($request->isMethod('post')){
            //$message = "added successfully";
            $email = Auth::guard('admin')->user()->email;
            $data = $request->all();
            $expenses->admin_name = $data['admin_name'];
            $expenses->email = $email;
            $expenses->expenses_reason = $data['expenses_reason'];
            $expenses->expenses_type = $data['expenses_type'];
            $expenses->amount = $data['amount'];
            $expenses->date = $data['date'];

            $expenses->save();

            return redirect('admin/expenses/my-expenses')->with('success_message',$message);
        }return view('admin.expenses.add_expenses')->with(compact('title','expenses'));
    }
}
