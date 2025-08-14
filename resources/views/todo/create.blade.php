<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-200 flex justify-center items-center min-h-screen">
    <div class="bg-blue-900 w-200 mx-auto rounded">

            @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                <p class="font-bold">Alerta</p>
                <ul class="mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('todo.store') }}" method="POST">
                @csrf
                <div class="bg-blue-900 flex p-2 m-2">

                    <input type="text" placeholder="Título" name="title" id="title" value="{{ old('title') }}"class="bg-gray-200 p-2 m-2 flex flex-grow rounded-lg">
                </div>

                <div class="bg-blue-900 min-h-80 p-2 m-2 flex overflow-auto max-h-80 ">
                    <textarea placeholder="Descrição" name="description" id="description" value="{{ old('description') }}" class="bg-gray-200  p-2 m-2 w-full rounded-lg"></textarea>
                </div>

                <div class="input-container bg-bkue-900 p-2 m-2 text-center">
                    <a class="group relative inline-flex items-center overflow-hidden rounded-lg bg-indigo-600 px-8 py-3 text-white focus:ring-3 focus:outline-hidden"
                    href="{{ route('todo.index') }}">
                    <span class="absolute -start-full transition-all group-hover:start-4">
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
                            d="M15 19l-7-7 7-7"/>
                        </svg>
                    </span>
                        <span class="text-sm font-medium transition-all group-hover:ms-4"> Voltar </span>
                    </a>

                <input type="date" name="due_date" id="due_date" value="{{ old('due_date') }}" class="bg-gray-200 m-1 p-2 rounded-lg">

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
                    <span class="text-sm font-medium transition-all group-hover:me-4"> Nova Tarefa </span>
                </button>

                </div>
            </form>
            </div>        
    </div>
</body>

</html>