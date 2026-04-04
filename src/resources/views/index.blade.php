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
                <input type="text" name="first_name">
            </div>
            @if ($errors->has('first_name'))
            <div style="color:red">{{ $errors->first('first_name') }}</div>
            @endif
            <div class="create-form__content">
                <input type="text" name="last_name">
            </div>
            @if ($errors->has('last_name'))
            <div style="color:red">{{ $errors->first('last_name') }}</div>
            @endif
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
                <input type="radio" name="gender" value="1">
                <span class="create-form__label--item">
                    男性
                </span>
                <input type="radio" name="gender" value="2">
                <span class="create-form__label--item">
                    女性
                </span>
                <input type="radio" name="gender" value="3">
                <span class="create-form__label--item">
                    その他
                </span>
                </div>
                @if ($errors->has('gender'))
            <div style="color:red">{{ $errors->first('gender') }}</div>
            @endif
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
            @if ($errors->has('email'))
            <div style="color:red">{{ $errors->first('email') }}</div>
            @endif
            <div class="create-form__title">
                <span class="create-form__label--item">
                    電話番号
                </span>
                <span class="create-form__label--required">
                    ※
                </span>
            </div>
            <div class="create-form__content">
                <input type="tel" name="telA">

                <div class="create-form__content">
                <input type="tel" name="telB">

                <div class="create-form__content">
                <input type="tel" name="telC">
            </div>
            <!-- @if ($errors->has('first_name')) 
            <div style="color:red">{{ $errors->first('first_name') }}</div>
            @endif-->
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
            @if ($errors->has('address'))
            <div style="color:red">{{ $errors->first('address') }}</div>
            @endif
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
                <select name="category_id">
                    <option value="選択してください">選択してください</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                    {{ $category->content }}
                    @endforeach
                </select>
            </div>
                @if ($errors->has('category_id'))
            <div style="color:red">{{ $errors->first('category_id') }}</div>
            @endif
            <div class="create-form__title">
                <span class="create-form__label--item">
                    お問い合わせの内容
                </span>
                <span class="create-form__label--required">
                    ※
                </span>
            </div>
            <div class="create-form__content">
                <textarea type="text" name="detail">
            </textarea>
            </div>
            @if ($errors->has('detail'))
            <div style="color:red">{{ $errors->first('detail') }}</div>
            @endif
            <div class="form__button">
                <button class="form__button-submit" type="submit">
                    確認画面
                </button>
            </div>
            
        </div>

        </div>




            
             

    </form>
</div>