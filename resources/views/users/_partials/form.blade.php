<div class="w-full bg-white shadow-md rounded px-8 py-12">
    @csrf
    <label for="">Nome:</label>
    <input type="text" name="name" id="" value="{{ $user->name ?? old('name') }}" placeholder="Digite o nome..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <label for="">E-mail:</label>
    <input type="email" name="email" id=""value="{{ $user->email ?? old('email') }}"  placeholder="Digite seu e-mail..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <label for="">Login:</label>
    <input type="text" name="login" id="" value="{{ $user->login ?? old('login') }}" placeholder="Digite seu login..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <label for="">Senha:</label>
    <input type="password" name="password" id=""value="{{ $user->password ?? old('password') }}"  placeholder="Digite sua senha..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">

    <div flex-auto>
      <button type="submit" class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
    Enviar
    </button>
    <button>
        <a href="{{route('users.index')}}" class="hadow bg-yellow-500 hover:bg-yellow-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Voltar</a>
    </button>
</div>
