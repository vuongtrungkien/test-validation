@extends('home')
@section('title','Tạo mới')
@section('content')
    <div class="main-content col=6">
        <h1>Form điền thông tin</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('store') }}">
            {{ csrf_field() }}
            <label for="number">chỉ được nhập số</label>
            <input type="text" name="number">

            <button type="submit">Kiểm tra</button>
        </form>
    </div>
@endsection
