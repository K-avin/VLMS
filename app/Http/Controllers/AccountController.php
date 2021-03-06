<?php

namespace App\Http\Controllers;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAccountRequest;
use App\Http\Requests\EditAccountRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Vehicle;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function landingIindex()
    {   
        return view('pages.home');
    }

    public function homeIndex()
    {   
        $vehicles = DB::table('vehicles')->paginate(20);
        $count = Vehicle::all()->count();
        return view('pages.vehiclesList', compact('vehicles','count'));
    }
    public function index()
    {   
        $user_id = Auth::id();
        $accounts = Account::where('user_id', '=', $user_id)->paginate();     
        return view('accounts.index', compact('accounts'))->with('no', 1);
    }

    public function create()
    {
        return view('accounts.create');
        
    }

    public function store(CreateAccountRequest $request)
    {   
        //$request->user_id = Auth::id();

        $this->validate($request, [
           
            'account_number' => 'required',
            'account_type' => 'required',
            'account_balance' => 'required'
        ]);

        $input = $request->all();

        $input['user_id'] = Auth::id();

        Account::create($input);       

        return redirect()->route('accounts.create')->with('message', 'Account detailse saved successfully');
    }

    public function edit(Account $account)
    {
        return view('accounts.edit', compact('account'));
    }
    public function update(EditAccountRequest $request, Account $account)
    {
        $account->update($request->validated());

        return redirect()->route('accounts.index');
    }

    public function destroy(Account $account)
    {
       // if ($account->posts()->count()) {
        //    return back()->withErrors(['error' => 'Cannot delete, category has posts.']);
       // }

        $account->delete();

        return redirect()->route('accounts.index');
    }

}
