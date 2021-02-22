@extends('layouts.app')

@section('content')

<div class="wrap">
    <button type="button" class="btn btn-light btn-ms"> 
      <a href="{{ route('posts.index') }}">Ritorna all'elenco dei Post</a> 
    </button>
        <a class="card-link" href="/">
          <article class="blog-card">
            <div class="article-details">
              <h2 class="post-title"><?php echo "{$post->title}";?></h2>
              <p class="post-description"><?php echo " {$post->body}" ;?></p>
            </div>
            <!-- /.article-details -->
          </article>
        </a>
  </div>

@endsection