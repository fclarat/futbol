@extends('layouts.master')

@section('content')

<div class="col-sm-8 blog-main">
        <h1>Crear un Partido</h1>

        <hr>

        <form method="POST" action="/partidos">
            {{ csrf_field() }}

          <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="inout" class="form-control" id="nombre" name="nombre" required>
          </div>

          <button type="submit" class="btn btn-primary">Crear Partido</button>
        </form>
    </div>

@endsection
