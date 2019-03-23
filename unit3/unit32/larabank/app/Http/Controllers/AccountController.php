<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;

use Gate;

class AccountController extends Controller
{
    public function show($id){
      $account = Account::find($id); // Account::find() method use and param $id given to it
      return view('show', array('account' => $account));
    }

    public function list(){
      return view('list', array('accounts' => Account::all())); // all() to return all acc objects
      /* view is loaded through view() function passing name of view and array with data to be
      supplied to view */

    }

    public function display(){
      $accountsQuery = Account::all();
      if(Gate::denies('displayall')){
        $accountsQuery = $accountsQuery->where('userid', auth()->user()->id);
      }
      return view('/display', array('accounts'=>$accountsQuery));

    }
}
