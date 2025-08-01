<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-200 flex justify-center items-center min-h-screen">
<div class="bg-green-900 w-200 mx-auto rounded">

        <div class="bg-amber-900 flex p-2 m-2">
            <input type="text" placeholder="titulo" id="input-todo" class="bg-amber-200 p-2 m-2 flex flex-grow rounded">
        </div>

        <div class="bg-amber-900 min-h-80 p-2 m-2 flex overflow-auto max-h-80">
            <textarea placeholder="descricao" id="input-todo" class="bg-amber-200  p-2 m-2 w-full rounded"></textarea>
        </div>

        <div class="input-container bg-amber-900 p-2 m-2 text-center">
            <input type="date" placeholder="data" id="input-todo" class="bg-amber-200 m-1 p-2 rounded">
            <button id="add-todo" class="bg-blue-900 p-2 py-1 text-white font-bold rounded">+</button>
        </div>        
    </div>
</body>

</html>