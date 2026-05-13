@extends('layouts.auth-app')
@section('links')
<a href="/register">register</a>
@endsection
@section('page_title','login')
@section('css')
<link rel="stylesheet" href="{{ asset('css/auth-common.css') }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="white-box">
  <div class="login-form__content">
    <div class="login-form__heading">
      <h2>ログイン</h2>
    </div>
    <form class="form" action="{{ route('login') }}" method="POST">
  @csrf
      </div>
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">メールアドレス</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="email" name="email" value="{{ old('email') }}" />
          </div>
          <div class="email">
            @if ($errors->has('email'))
              <div style="color:red">{{ $errors->first('email') }}</div>
              @endif
          </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">パスワード</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="password" name="password" />
          </div>
          <div class="form__error">
            @if ($errors->has('password'))
              <div style="color:red">{{ $errors->first('email') }}</div>
              @endif
          </div>
        </div>
      </div>
      <div class="form__button">
        <button class="form__button-submit" type="submit">ログイン</button>
      </div>
    </form>
  </div>
</div>
@endsection