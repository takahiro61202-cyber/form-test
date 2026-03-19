@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="fashion__content">
    <form class="create-form" action="/confirm" method="post">
        @csrf
        <div class="title">
            FashionablyLate
        </div>
        <div class="create-form__group">
            <div class="create-form__title">
                <span class="create-form__label--item">
                    お名前
                </span>
                <span class="create-form__label--required">
                    ※
                </span>
            </div>
            <div class="create-form__content">
                <input type="text" name="name">
            </div>
        </div>
        <div class="create-form__group">
            <div class="create-form__tittle">
                <span class="create-form__label--item">
                    性別
                </span>
                <span class="create-form__label--required">
                    ※
                </span>
            </div>
            <div class="create-form__content">
                <input type="radio" name="gender" value="male">
                <span class="create-form__label--item">
                    男性
                </span>
                <input type="radio" name="gender" value="female">
                <span class="create-form__label--item">
                    女性
                </span>
                <input type="radio" name="name">
                <span class="create-form__label--item">
                    その他
                </span>
            </div>
            <div class="create-form__title">
                <span class="create-form__label--item">
                    メールアドレス
                </span>
                <span class="create-form__label--required">
                    ※
                </span>
            </div>
            <div class="create-form__content">
                <input type="email" name="email">
            </div>
        </div>
        <div class="create-form__title">
                <span class="create-form__label--item">
                    住所
                </span>
                <span class="create-form__label--required">
                    ※
                </span>
            </div>
            <div class="create-form__content">
                <input type="text" name="address">
            </div>
        </div>
        <div class="create-form__title">
                <span class="create-form__label--item">
                    建物名
                </span>
            </div>
            <div class="create-form__content">
                <input type="text" name="building">
            </div>
            <div class="create-form__title">
                <span class="create-form__label--item">
                    お問い合わせの種類
                </span>
                <span class="create-form__label--required">
                    ※
                </span>
            </div>
            <div class="create-form__content">
                <select name="select"  name="">
                    <option value="選択してください">選択してください</option>
                    <option value="id">id</option>
                    <option value="content">content</option>
                    <option value="created_at">created_at</option>
                    <option value="updated_at">updated_at</option>
                </select>
            </div>
            <div class="create-form__title">
                <span class="create-form__label--item">
                    お問い合わせの内容
                </span>
                <span class="create-form__label--required">
                    ※
                </span>
            </div>
            <div class="create-form__content">
                <input type="text" name="email">
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">
                    確認画面
                </button>
            </div>
            
        </div>

        </div>




            
             

    </form>
</div>