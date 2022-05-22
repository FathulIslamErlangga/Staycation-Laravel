@extends('auth.layout')
@section('content')
<section class="form-register">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="/assets/images/foto_keluarga2.png" alt="" >
            </div>
            <div class="col-8 content-register">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card-body mx-auto">
                    <h3 class="text-center">Register</h3>
                    <form action="/dashboard-admin/register" method="post">
                        @csrf
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input class="uk-input @error('name') uk-form-danger @enderror" type="text" name="name" placeholder="Username" required value="{{ old('name') }}">
                            </div>
                            @error('name')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                <input class="uk-input  @error('email') uk-form-danger @enderror" type="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                            </div>
                            @error('email')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                <input class="uk-input  @error('password') uk-form-danger @enderror" type="password"  name="password" placeholder="Password" >
                            </div>
                            @error('password')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <p>Already Registered <a href="/dashboard-admin/login">Login</a></p>
                        <button type="submit" class="btn btn-register">Register</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection