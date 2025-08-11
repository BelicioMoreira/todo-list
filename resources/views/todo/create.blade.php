<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-200 flex justify-center items-center min-h-screen">
    <div class="bg-green-900 w-200 mx-auto rounded">

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
                <div class="bg-amber-900 flex p-2 m-2">

                    <input type="text" placeholder="Título" name="title" id="title" value="{{ old('title') }}"class="bg-amber-200 p-2 m-2 flex flex-grow rounded">
                </div>

                <div class="bg-amber-900 min-h-80 p-2 m-2 flex overflow-auto max-h-80">
                    <textarea placeholder="Descrição" name="description" id="description" value="{{ old('description') }}" class="bg-amber-200  p-2 m-2 w-full rounded"></textarea>
                </div>

                <div class="input-container bg-amber-900 p-2 m-2 text-center">
                    <input type="date" name="due_date" id="due_date" value="{{ old('due_date') }}" class="bg-amber-200 m-1 p-2 rounded">
                </div>
                <button type="submit" class="bg-blue-900 p-3 py-2 text-white font-bold rounded">+</button>
            </form>
            </div>        
    </div>
</body>

</html>