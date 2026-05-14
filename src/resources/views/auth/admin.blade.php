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
                <td>
                    <button 
                        class="detail-btn"
                        data-id="{{ $contact->id }}"
                        data-name="{{ $contact->last_name }} {{ $contact->first_name }}"
                        data-email="{{ $contact->email }}"
                        data-gender="{{ $contact->gender_label }}"
                        data-detail="{{ $contact->detail }}"
                        data-category="{{ $contact->category->content }}">
                        詳細
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination">
        {{ $contacts->links() }}
    </div>

</div>

<!-- モーダル用 -->
<div class="modal" id="detailModal" tabindex="-1" role="dialog">

  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">詳細</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <p><strong>名前：</strong> <span id="modal-name"></span></p>
        <p><strong>メール：</strong> <span id="modal-email"></span></p>
        <p><strong>性別：</strong> <span id="modal-gender"></span></p>
        <p><strong>カテゴリ：</strong> <span id="modal-category"></span></p>
        <p><strong>詳細：</strong> <span id="modal-detail"></span></p>
      </div>

    </div>
  </div>
</div>

<!-- モーダルの中身 -->
<script>
document.querySelectorAll('.detail-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.getElementById('modal-name').textContent = btn.dataset.name;
        document.getElementById('modal-email').textContent = btn.dataset.email;
        document.getElementById('modal-gender').textContent = btn.dataset.gender;
        document.getElementById('modal-category').textContent = btn.dataset.category;
        document.getElementById('modal-detail').textContent = btn.dataset.detail;

        $('#detailModal').modal('show');
    });
});
</script>

@endsection