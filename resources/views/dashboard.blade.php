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
                    <th class="p-2">titulo</th>
                    <th class="p-2">vencimento</th>
                    <th class="p-2">status</th>
                    <th class="p-2">acoes</th>
                </tr>

                <tr class="bg-red-600">
                    <td class="p-2">1</td>
                    <td class="p-2">2</td>
                    <td class="p-2">3</td>
                    <td class="p-2">4</td>
                </tr>
            
            </table>
        </div>

        <div class="input-container bg-amber-900 p-2 m-2 text-center">
            <button id="add-todo" class="bg-blue-900 text-white p-3 font-bold rounded">Adicionar Tafera</button>
        </div>        
    </div>
</body>

</html>