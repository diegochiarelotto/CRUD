<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.tailwindcss.com"></script>
     <title>Login_01</title>
</head>
<body>
    <main class="flex items-center justify-center h-screen bg-gray-100">
        <form action="POST">
            @csrf

            <div class="bg-white w-96 p-6 rounded shadow-sm">
               <div class="flex items-center justify-center mb-4">
                    <img src="/img/logo.png" alt="logo" class="h-32">
               </div>
               <!-- <div class="bg-red-400 px-3 py-2 rounded text-gray-100 mb-3">
                    <p>Senha inválida!</p>
               </div> -->
               <label class="text-gray-700 " for="">Login</label>
               <input class="w-full py-2 bg-gray-100 text-gray-500 px-1 outline-none mb-4" type="text" name="" id="">
               <label class="text-gray-700" for="">Senha</label>
               <input class="w-full py-2 bg-gray-100 text-gray-500 px-1 outline-none mb-4" type="password" name="" id="">
               <button class="w-full bg-blue-500 text-gray-100 py-2 rounded hover:bg-blue-600 transition-colors " type="submit">Login</button>
            </div>
        </form>
    </main>
</body>
</html>
