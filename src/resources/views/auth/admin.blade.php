@extends('layouts.auth-app')
@section('page_title', 'Admin')
@section('links')
    <form action="/logout" method="post">
        @csrf
        <div>
        <button class="logout__button" type="submit">logout</button>
        </div>
    </form>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div>
    
    <form  action="{{ route('admin') }}" method="get">
        @csrf
        <input class="search" type="text" name="keyword" value="{{ old('keyword') }}" placeholder="">

        @php
            $nextOrder = ($order === 'asc') ? 'desc' : 'asc';
        @endphp

        <a class="search-gender" href="{{ route('admin', ['sort' => 'gender', 'order' => $nextOrder]) }}">
            性別（{{ $order === 'asc' ? '昇順' : '降順' }}）
        </a>

        <a class="search-detail" href="{{ route('admin', ['sort' => 'detail', 'order' => $nextOrder]) }}">
            お問い合わせの種類（{{ $order === 'asc' ? '昇順' : '降順' }}）
        </a>

        <div class="search-date">
            <input type="date" name="target_date" value="{{ request('target_date') }}">
        </div>

        <button class="search-button" type="submit">検索</button>
        <button class="reset-button" type="button" onclick="location.href='{{ route('admin') }}'">リセット</button>
    </form>

    <table class="admin__table">
        <thead class="admin__table--head">
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
                <td>{{ $contact->gender_label }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->category->content }}</td>
                <td><button>詳細</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination">
        {{ $contacts->links() }}
    </div>

</div>
@endsection