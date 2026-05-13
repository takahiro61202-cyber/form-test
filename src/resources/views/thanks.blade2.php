@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks">
    <form class="" action="/" method="get">
        @csrf
        <h3 class="thanks__text">お問い合わせありがとうございました</h3>
        <div>
            <button class="thanks__box" type="submit">HOME</button>
        </div>
    </form>
</div>
@endsection