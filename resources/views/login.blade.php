@extends('layout.main')

@section('container')


    <div class="container mt-5 mb-5" style="height: 100vmin">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 p-3 ">
                    @if (Session::has('error'))
                        <div class="alert alert-danger show">{{ Session::get('error') }}</div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success show">{{ Session::get('success') }}</div>
                    @endif
                    <form action="/login" method="POST">
                        @csrf
                        <div class="text-center">
                            <img src="{{ asset('/asset/image/logo.jpg') }}" alt="" width="90" class="rounded-circle img-thumbnail">
                        </div>
                        <h2 class="text-center">Selamat Datang di <br>Toko Alat Kesehatan</h2>
                        <div class="mb-3">
                            <label for="" class="form-label">User Id</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">Login</button>
                        </div>
                        <small>You dont have any account? <a href="/register" class="text-decoration-none">Register</a></small>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection