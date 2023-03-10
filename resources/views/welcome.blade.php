<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap  w/  Vite</title>
    @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        
        
        
        
        ]);
</head>
<body>
    
        <div class="container  py-4 px-3 mx-auto">
            <h1> Hello, bootstrap and vite </h1>
            <form action="{{url('/tela_inicial" method="get">
            <button class="btn btn-primary">Ir para proxima pagina</button>
            </form>
        </div>
</body>
</html>