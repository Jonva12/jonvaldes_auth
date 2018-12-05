@extends('layouts.mainud6')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Perfil</div>

                <div class="card-body">
                    <form action="/perfilCambiar" method="get">
                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                        <div>
                            Nombre: <input type="text" name="name" value="{{Auth::user()->name}}">
                        </div>
                        <div>
                            Email: <input type="Email" name="email" value="{{Auth::user()->email}}">
                        </div>
                        <div>
                            Contraseña: <input type="password" name="pass" value="{{Auth::user()->password}}">
                        </div> 
                        <div>
                            <input type="submit" value="Cambiar">
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection