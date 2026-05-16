@extends('layouts.app')
@section('page_title', 'Confirm')
@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div>

    <form action="/thanks" method="post">
        @csrf
        <div class="confirm">
            <table>

                {{-- お名前 --}}
                <tr>
                    <td class="table__title">お名前</td>
                    <td>
                        <input type="text" value="{{ $contact->name }}" readonly>

                        {{-- hidden --}}
                        <input type="hidden" name="last_name" value="{{ $contact->last_name }}">
                        <input type="hidden" name="first_name" value="{{ $contact->first_name }}">
                    </td>
                </tr>

                {{-- 性別 --}}
                <tr>
                    <td class="table__title">性別</td>
                    <td>
                        <input type="text" value="{{ $contact->gender_label }}" readonly>

                        {{-- hidden --}}
                        <input type="hidden" name="gender" value="{{ $contact->gender }}">
                    </td>
                </tr>

                {{-- メール --}}
                <tr>
                    <td class="table__title">メールアドレス</td>
                    <td>
                        <input type="text" value="{{ $contact->email }}" readonly>

                        {{-- hidden --}}
                        <input type="hidden" name="email" value="{{ $contact->email }}">
                    </td>
                </tr>

                {{-- 電話番号 --}}
                <tr>
                    <td class="table__title">電話番号</td>
                    <td>
                        <input type="text" value="{{ $contact->tel }}" readonly>

                        {{-- hidden --}}
                        <input type="hidden" name="tel" value="{{ $contact->tel }}">

                        <input type="hidden" name="telA" value="{{ $contact->telA }}">
                        <input type="hidden" name="telB" value="{{ $contact->telB }}">
                        <input type="hidden" name="telC" value="{{ $contact->telC }}">
                    </td>
                </tr>

                {{-- 住所 --}}
                <tr>
                    <td class="table__title">住所</td>
                    <td>
                        <input type="text" value="{{ $contact->address }}" readonly>

                        {{-- hidden --}}
                        <input type="hidden" name="address" value="{{ $contact->address }}">
                    </td>
                </tr>

                {{-- 建物名 --}}
                <tr>
                    <td class="table__title">建物名</td>
                    <td>
                        <input type="text" value="{{ $contact->building }}" readonly>

                        {{-- hidden --}}
                        <input type="hidden" name="building" value="{{ $contact->building }}">
                    </td>
                </tr>

                {{-- お問い合わせ内容（カテゴリ） --}}
                <tr>
                    <td class="table__title">お問い合わせの内容</td>
                    <td>
                        <input type="text" value="{{ $contact->category->content }}" readonly>

                        {{-- hidden --}}
                        <input type="hidden" name="category_id" value="{{ $contact->category_id }}">
                    </td>
                </tr>

                {{-- 詳細 --}}
                <tr>
                    <td class="table__title">お問い合わせの種類</td>
                    <td>
                        <input type="text" value="{{ $contact->detail }}" readonly>

                        {{-- hidden --}}
                        <input type="hidden" name="detail" value="{{ $contact->detail }}">
                    </td>
                </tr>

            </table>


            <div class="confirm-buttons">
                <button class="send" type="submit" name="action" value="send">送信</button>
                <button class="mod" type="submit" name="action" value="mod">修正</button>
            </div>
        </div>
    </form>
</div>
@endsection