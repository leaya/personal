@extends('layouts.default')
@section('title', '登录')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>登录</h5>
            </div>
            <div class="panel-body">
                @include('shared._errors')

                <form method="POST" action="{{route('login')}}">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="email" class="control-label">邮箱:</label>
                        <input id="email" name="email" type="email" class="form-control" value="{{old('email')}}">
                    </div>

                    <div class="form-group">
                      <label for="password" class="control-label">密码:</label>
                      <input id="password" name="password" type="password" class="form-control">
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox" name="remember">记住我</label>
                    </div>

                    <button type="submit" class="btn btn-primary">登录</button>
                </form>

                <hr>

                <p>还没账号？ <a href="{{route('signup')}}">现在注册！</a></p>
            </div>
        </div>
    </div>
@endsection