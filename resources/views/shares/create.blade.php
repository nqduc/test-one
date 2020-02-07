@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Bảng Đăng Ký
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('shares.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Tên Khách Hàng :</label>
              <input type="text" class="form-control" name="share_name"/>
          </div>
          <div class="form-group">
              <label for="price">Đơn Giá :</label>
              <input type="text" class="form-control" name="share_price"/>
          </div>
          <div class="form-group">
              <label for="quantity">Số Lượng :</label>
              <input type="text" class="form-control" name="share_qty"/>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
      </form>
  </div>
</div>
@endsection
