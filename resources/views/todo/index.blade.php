<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-200 flex justify-center items-center min-h-screen">
<div class="bg-green-900 w-200 mx-auto rounded">
    
        @if(@session('success'))        
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
            <p class="font-bold">Sucesso</p>
            <p>{{ session('success') }}</p>
            </div>
        @elseif(@@session('error'))
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
            <p class="font-bold">Alerta</p>
            <p>{{ session('error') }}</p>
            </div>
        @endif

        <div class="bg-amber-900 flex p-2 m-2">
            <form method="GET" action="/search">
            <input type="text" name="search" placeholder="Buscar..." value="{{ isset($search) ? $search : '' }}" class="bg-amber-200 p-2 m-2 flex flex-grow rounded">
            <input type="text" placeholder="filtro" id="input-todo" class="bg-amber-200 p-2 m-2 rounded">
            <button id="add-todo" class="bg-blue-900 text-white m-2 p-2 font-bold rounded">Aplicar</button>
            </form>
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
                        <td class="p-2">
                            @if ($task->is_completed === 0)
                            <a href="{{ route('todo.markcompleted', $task->id) }}">Marcar como concluída</a>
                            @else
                            <a href="{{ route('todo.markcompleted', $task->id) }}">Marcar como sem concluír</a>
                            @endif
                            {{ $task->status }}</td>
                        <td class="p-2 d-flex justify-start gap-2">
                            <a href=" {{ route('todo.edit', $task->id) }} " type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editar</a>
                        <form action="{{ route('todo.destroy', $task->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Excluir</button>
                        </form>

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