@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div>
    <form class="" action="/" method="get">
        @csrf
    <div>お問い合わせありがとうございました</div>
    <div>
    <button type="submit">HOME</button>
    </div></form>
</div>