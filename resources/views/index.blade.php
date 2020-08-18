<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud con lumen</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        
    </head>
    <body>

        <div class="content">
                <div class="title m-b-md">
                    Israel Rios
                </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <div class="card border-0 shadow"> <!--clase tarjeta de boostrap-->
                        <div class="card-body">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                - {{ $error }} <br>
                                @endforeach
                            </div>
                            @endif
                        <form action="{{ route('user.store') }} " method="POST"><!--llamando ruta de guardar con post-->
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <!-- etiqueta in put guarda el valor y le da formato
                                        -type indica el tipo de texto
                                        -name nombre de la variable
                                        -class la clase de form
                                        -placeholder mantiene un texto
                                        -value mantiene el ultimo valor que se halla ingresado
                                        -old() metodo de laravel que llama antiguo dato que se halla llamado en este caso de bd
                                    -->
                                    <input type="text-decoration" name="name" class="form-control" placeholder="Nombre" value="{{ old('name') }}">
                                </div>
                                <div>
                                    <input type="text-transform" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                </div>
                                <div>
                                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                                </div>
                                <div class="col-auto"> <!--clase columna guin y tamaño de col-->
                                    @csrf <!--cross site request forgery proteccion de datos (le decimos a laravel que son nuestros datos)-->
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <table class="table">
                        <thead> <!--encabezado-->
                            <tr><!--fila-->
                                <th><!--columna-->
                                    ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>&nbsp;</th><!--espacio en blanco--> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user) <!--sentencia de php-->  
                            <tr>
                                <td> <!--campos-->
                                {{ $user->id }}
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <form action="{{ route('user.destroy', $user) }}" method="POST">
                                        @method('DELETE')
                                        @csrf <!--cross site request forgery proteccion de atacques maliciosos (sin este no funciona la ruta))-->
                                        <input type="submit" value="Eliminar" class="btn btn-sm btn-danger"
                                        onclick="return confirm('¿Desea eliminar ...?')">
                                    </form>
                                </td>
                            @endforeach          
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </body>
</html>
