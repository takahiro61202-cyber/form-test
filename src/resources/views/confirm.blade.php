@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class=>
    <form class="" action="/thanks" method="post">
        @csrf
        <input type="varchar" name="first_name" value="{{ $contact['first_name'] }}" readonly />
        


        <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />

        <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />

        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />

        <input type="tel" name="telA" value="{{ $contact['telA'] }}" readonly />

        <input type="tel" name="telB" value="{{ $contact['telB'] }}" readonly />

        <input type="tel" name="telC" value="{{ $contact['telC'] }}" readonly />

        <input type="text" name="address" value="{{ $contact['address'] }}" readonly />

        <input type="text" name="building" value="{{ $contact['building'] }}" readonly />

        <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />

        <input type="id" name="category_id" value="{{ $contact['category_id'] }}" readonly />


        <button type="submit" name="action" value="send">送信</button>

        <button type="submit" name="action" value="mod">修正</button>
    </form>
</div>