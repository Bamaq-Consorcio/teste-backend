<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="/css/app.css">
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h3>Sortear vagas</h3>
                <button class="btn-sortear">Sortear</button>
            </div>

            <div class="blocos">
            {{--  @foreach ($moradores as $morador)   --}}
                <div class="bloco">
                    <P>Nome:</P>
                    <P>Ap:</P>
                    <p>Vaga:</p>
                </div>
            {{-- @endforeach --}}
            </div>
        </div>
    </body>
</html>
