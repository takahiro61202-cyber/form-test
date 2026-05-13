@extends('layouts.app')
@section('page_title', 'Contact')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
<div class="fashion__content">

    <form class="create-form" action="/confirm" method="post">
        @csrf

        <!-- タイトル -->
        <div class="create-form__group">
            <div class="create-form__center">
                <div class="create-form__title">
                    <span class="create-form__label--item">お名前</span>
                    <span class="create-form__label--required">※</span>
                </div>

        <!-- 入力欄 -->
                <div class="create-form__content--name">
                    <input type="text" name="first_name" value="{{ old('first_name') }}">
                    <input type="text" name="last_name" value="{{ old('last_name') }}">
                </div>
            </div>
        </div>

        <!-- エラー -->
            @error('first_name')
                <div  class="error-message" style="color:red">{{ $message }}</div>
            @enderror
            @error('last_name')
                <div  class="error-message" style="color:red">{{ $message }}</div>
            @enderror

        <!-- タイトル -->
        <div class="create-form__group">
            <div class="create-form__center">
                <div class="create-form__title">
                    <span class="create-form__label--item">性別</span>
                    <span class="create-form__label--required">※</span>
                </div>
        <!-- 入力欄 -->
                <div class="create-form__content">
                    <label><input type="radio" name="gender" value="1"> 男性</label>
                    <label><input type="radio" name="gender" value="2"> 女性</label>
                    <label><input type="radio" name="gender" value="3" checked> その他</label>
                </div>
            </div>
        </div>
        <!-- エラー -->
            @error('gender')
                <div  class="error-message" style="color:red">{{ $message }}</div>
            @enderror

        <!-- タイトル -->
        <div class="create-form__group">
            <div class="create-form__center">
                <div class="create-form__title">
                    <span class="create-form__label--item">メールアドレス</span>
                    <span class="create-form__label--required">※</span>
                </div>

        <!-- 入力欄 -->
                <div class="create-form__content">
                    <input type="email" name="email" value="{{ old('email') }}">
                </div>
            </div>

        <!-- エラー -->
            @error('email')
                <div  class="error-message" style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <!-- タイトル -->
        <div class="create-form__group">
            <div class="create-form__center">
                <div class="create-form__title">
                    <span class="create-form__label--item">電話番号</span>
                    <span class="create-form__label--required">※</span>
                </div>

        <!-- 入力欄 -->
                <div class="create-form__content--tel" >
                    <input type="tel" name="telA" value="{{ old('telA') }}" style="width:80px;">
                    <input type="tel" name="telB" value="{{ old('telB') }}" style="width:80px;">
                    <input type="tel" name="telC" value="{{ old('telC') }}" style="width:80px;">
                </div>
            </div>

        <!-- エラー -->
            @error('telA')
                <div  class="error-message" style="color:red">{{ $message }}</div>
            @enderror
            @error('telB')
                <div  class="error-message" style="color:red">{{ $message }}</div>
            @enderror
            @error('telC')
                <div  class="error-message" style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <!-- タイトル -->
        <div class="create-form__group">
            <div class="create-form__center">
                <div class="create-form__title">
                    <span class="create-form__label--item">住所</span>
                    <span class="create-form__label--required">※</span>
                </div>

        <!-- 入力欄 -->
                <div class="create-form__content">
                    <input type="text" name="address" value="{{ old('address') }}">
                </div>
            </div>

        <!-- エラー -->
            @error('address')
                <div  class="error-message" style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <!-- タイトル -->
        <div class="create-form__group">
            <div class="create-form__center">
                <div class="create-form__title">
                    <span class="create-form__label--item">建物名</span>
                </div>

            <!-- 入力欄 -->
                <div class="create-form__content">
                    <input type="text" name="building" value="{{ old('building') }}">
                </div>
            </div>
        </div>

        <!-- タイトル -->
        <div class="create-form__group">
            <div class="create-form__center">
                <div class="create-form__title">
                    <span class="create-form__label--item">お問い合わせの種類</span>
                    <span class="create-form__label--required">※</span>
                </div>

        <!-- 入力欄 -->
                <select name="category_id">
                    <option value="">選択してください</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->content }}
                    </option>
                    @endforeach
                </select>

        <!-- エラー -->
            @error('category_id')
                <div  class="error-message" style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <!-- タイトル -->
        <div class="create-form__group">
            <div class="create-form__center">
                <div class="create-form__title">
                    <span class="create-form__label--item">お問い合わせの内容</span>
                    <span class="create-form__label--required">※</span>
                </div>

        <!-- 入力欄 -->
                <div class="create-form__content">
                    <textarea name="detail">{{ old('detail') }}</textarea>
                </div>
            </div>

        <!-- エラー -->
            @error('detail')
                <div  class="error-message" style="color:red">{{ $message }}</div>
            @enderror
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>

    </form>
</div>
@endsection