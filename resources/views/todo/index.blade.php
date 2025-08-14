<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-200 flex justify-center items-center min-h-screen">
<div class="bg-blue-900 w-200 mx-auto rounded-lg">
    
        @if(@session('success'))        
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
            <p class="font-bold">Sucesso</p>
            <p>{{ session('success') }}</p>
            </div>
        @elseif(@session('error'))
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
            <p class="font-bold">Alerta</p>
            <p>{{ session('error') }}</p>
            </div>
        @endif

        <div class="bg-blue-900 flex p-2 m-2 ">
            <form method="GET" action="/search" class="flex w-full items-center gap-4">
            <input type="text" name="search" placeholder="Buscar..." value="{{ isset($search) ? $search : '' }}" class="flex-1 bg-gray-200/90 placeholder-gray-700/70 text-gray-900 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <select name="status" class="bg-gray-200/90 text-gray-900 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"">
                <option value="">Todos</option>
                <option value="0">Pendente</option>
                <option value="1">Concluído</option>
            </select>
                <button class=" items-center overflow-hidden inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-8 py-3 text-white focus:ring-3 focus:outline-hidden">
                    <span class="text-sm font-medium transition-all group-hover:me-4"> Aplicar </span>
                </button>
            </form>
        </div>

        <div class="bg-blue-900 min-h-80 p-2 m-2 overflow-auto max-h-80">
            <table class="bg-gray-300 w-full text-center overflow-hidden rounded-xl">
                <tr class="bg-blue-400 p-2 m-2">
                    <th class="p-2">Título</th>
                    <th class="p-2">Vencimento
                        <a href="{{ route('todo.index') }}">Ordenar</a>
                    </th>
                    <th class="p-2">Status</th>
                    <th class="p-2">Editar/Deletar</th>
                </tr>
                @foreach ($tasks as $task)
                    <tr>
                        <td class="p-2">{{ $task->title }}</td>
                        <td class="p-2">{{ $task->due_date }}</td>
                        <td class="p-2">
                            @if ($task->is_completed === 0)
                            <a class="inline-flex items-center rounded-full bg-red-300/90 px-3 py-1 text-xs font-semibold text-red-900 hover:bg-red-400" href="{{ route('todo.markcompleted', $task->id) }}">Pendente</a>
                            @else
                            <a class="inline-flex items-center rounded-full bg-green-300/90 px-3 py-1 text-xs font-semibold text-green-900 hover:bg-green-400" href="{{ route('todo.markcompleted', $task->id) }}">Concluído</a>
                            @endif
                            {{ $task->status }}
                        </td>
                        <td class="p-2 d-flex justify-start gap-2">
                            <a href=" {{ route('todo.edit', $task->id) }} " type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editar</a>
                        <form action="{{ route('todo.destroy', $task->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="cursor-pointer focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Excluir</button>
                        </form>

                        </td>
                    </tr>
                @endforeach            
            </table>
        </div>

        <div class="input-container bg-blue-900 p-2 m-2 text-center">
            <a href="{{ route("todo.create") }}">
                <button class="group relative inline-flex items-center overflow-hidden rounded-lg bg-indigo-600 px-8 py-3 text-white focus:ring-3 focus:outline-hidden">
                    <span class="absolute -end-full transition-all group-hover:end-4">
                        <svg
                            class="size-5 shadow-sm rtl:rotate-180"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 4v16m8-8H4"/>
                        </svg>
                    </span>
                    <span class="text-sm font-medium transition-all group-hover:me-4"> Adicionar Tarefa</span>
                </button>
        </div>        
    </div>
</body>

</html>