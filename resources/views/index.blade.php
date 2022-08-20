@extends('layouts.default')
@section('title', 'COACHTECH')

@section('content')

    <h1>トップページ</h1>

    @if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
      <li>
        {{$error}}
      </li>
      @endforeach
    </ul>
    @endif

    <form action="/" method="POST">
      @csrf
      <label>氏名<br>
        <input type="text" name="name">
      </label>
      <br>
      <label>メールアドレス<br>
        <input type="email" name="email">
      </label>
      <br>
      <button>送信する</button>
    </form>
@endsection