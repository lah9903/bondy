<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\View;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class UserController extends Controller
{

    protected $user;
    protected $role;


    /**
     * Create a new controller instance.
     *
     * @param User $users
      @return void
     */

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->middleware('auth');
    }  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$users = User::all();
    View::share('users', $users);
        return view('users.tables',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $this->user->createUser($request->all());
        return redirect()->route('user.index');
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = User::find($id);
        return view('users.edit', compact('a'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $a = User::find($id);
        $a->name = $request->name;
        $a->email = $request->email;
        $a->role = $request->role;
        $a->save();
        return redirect()->route('index.user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = User::find($id);
        $a->delete();
        return redirect()->route('index.user');
    }
}
