@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class=>

    <input type="varchar" name="first_name" value="{{ $contact['first_name'] }}" readonly />

    <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />

    <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />

    <input type="email" name="email" value="{{ $contact['email'] }}" readonly />

    <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />

    <input type="text" name="address" value="{{ $contact['address'] }}" readonly />

    <input type="text" name="building" value="{{ $contact['building'] }}" readonly />

    <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />

    <input type="timestamp" name="created_at" value="{{ $contact['created_at'] }}" readonly />

    <input type="timestamp" name="update_at" value="{{ $contact['update_at'] }}" readonly />
</div>