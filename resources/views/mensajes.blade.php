@extends('layouts.mainud6')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Perfil</div>

                <div class="card-body">
                    <div>
                        Nombre: {{Auth::user()->name}}
                    </div>
                    <div>
                        Email: {{Auth::user()->mensaje}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection