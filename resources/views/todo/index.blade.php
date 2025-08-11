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
            <input type="text" placeholder="buscador" id="input-todo" class="bg-amber-200 p-2 m-2 flex flex-grow rounded">
            <input type="text" placeholder="filtro" id="input-todo" class="bg-amber-200 p-2 m-2 rounded">
            <button id="add-todo" class="bg-blue-900 text-white m-2 p-2 font-bold rounded">Aplicar</button>
        </div>

        <div class="bg-amber-900 min-h-80 p-2 m-2 overflow-auto max-h-80">
            <table class="bg-blue-300 w-full text-center">
                <tr class="bg-amber-400 p-2 m-2">
                    <th class="p-2">Título</th>
                    <th class="p-2">Vencimento</th>
                    <th class="p-2">Status</th>
                    <th class="p-2">Editar/Deletar</th>
                </tr>
                @foreach ($tasks as $task)
                    <tr>
                        <td class="p-2">{{ $task->title }}</td>
                        <td class="p-2">{{ $task->due_date }}</td>
                        <td class="p-2">{{ $task->status }}</td>
                        <td class="p-2">
                            <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Green</button>
                            <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Red</button>
                        </td>
                    </tr>
                @endforeach            
            </table>
        </div>

        <div class="input-container bg-amber-900 p-2 m-2 text-center">
            <a href="{{ route("todo.create") }}">
            <button class="bg-blue-900 text-white p-3 font-bold rounded">Adicionar Tafera</button>
        </div>        
    </div>
</body>

</html>