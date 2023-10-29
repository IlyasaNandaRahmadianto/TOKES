@extends('layout.main')

@section('container')
    

    <div class="container mt-5 mb-5" style="height: -5vmin">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 p-3">
                    <form action="/register" method="POST">
                        @csrf
                        <h2 class="text-center">Register</h2>
                        <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Retype-Password</label>
                            <input type="password" name="repassword" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Date of Birth</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                        {{-- <div class="mb-3">
                            <label for="" class="form-label mx-4">Gender</label>
                            <input type="radio" name="gendermale">
                            <label for="">Male</label>
                            <input type="radio" name="genderfemale">
                            <label for="">Female</label><br>
                        </div> --}}
                        <div class="mb-3">
                            <label for="" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Contact</label>
                            <input type="text" name="contact" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">Register</button>
                        </div>
                        <small>You have any account? <a href="/login" class="text-decoration-none">Login</a></small>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection