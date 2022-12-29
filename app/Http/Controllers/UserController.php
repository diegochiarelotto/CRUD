<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Mostrar os usuários
   public function index(Request $request)
   {
    // $users = User::get();
    $users = User::where('name', 'LIKE',"%{$request->search}%")->get();

    return view('users.index',compact('users'));
   }
    //Mostrar os detalhes dos usuários
   public function show($id)
   {
    // if(!$user = User::where('id',$id)->first())
     if(!$user = User::find($id))
      return redirect()->route('users.index');

      return view('users.show',compact('user'));
   }
   //Criar um Usuário
   public function create()
    {
        return view('users.create');
    }
    //public function store(Request $request)
    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);

        return redirect()->route('users.index');
    }
    //Editar um usuário
    public function edit($id)
    {
        if(!$user = User::find($id))
       return redirect()->route('users.index');

        return view('users.edit',compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if(!$user = User::find($id))
      return redirect()->route('users.index');

      $data = $request->only('name','email','login');
        if($request->password)
            $data['password'] = bcrypt($request->password);
      $user->update($data);

      return redirect()->route('users.index');
    }
    //Excluir usuário
    public function destroy($id)
   {
    // if(!$user = User::where('id',$id)->first())
     if(!$user = User::find($id))
      return redirect()->route('users.index');

      $user->delete();

      return redirect()->route('users.index');
   }


}
