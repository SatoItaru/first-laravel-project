@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    投稿一覧
                </div>
                @foreach ($posts as $post)
                <div class="card-body bg-dark">
                    <h5 class="card-title text-white">タイトル：{{ $post->title }}</h5>
                    <p class="card-text text-white">内容：{{ $post->body }}</p>
                    <p class="card-text text-white">投稿者：{{ $post->user->name }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary rounded-circle">詳細へ</a>
                </div>
                <div class="row justify-content-center">
                  <div class="col-md-3">
                      <form action="">
                          <input type="submit" value="&#xf164;いいね" class="fas btn btn-success">
                      </form>
                  </div>
                  <div class="col-md-3">
                      <form action="">
                          <input type="submit" value="&#xf164;いいね取り消す" class="fas btn btn-danger">
                      </form>
                  </div>
              </div>
                <div class="card-footer text-muted">
                    投稿日時：{{ $post->created_at }}
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-primary rounded-circle">新規投稿</a>
        </div>
    </div>
</div>
@endsection