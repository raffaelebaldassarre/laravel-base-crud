@extends('layouts.app')

@section('content')

<h1>Aggiungi un nuovo Post</h1>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text"
            class="form-control" name="title" id="title" aria-describedby="titleHelper" placeholder="Inserisci il titolo del post">
          <small id="titleHelper" class="form-text text-muted">Titolo del Post</small>
        </div>

        <div class="form-group">
          <label for="body">Testo</label>
          <textarea class="form-control" name="body" id="body" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Aggiungi il Post</button>

    </form>

@endsection