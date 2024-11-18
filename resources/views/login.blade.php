@extends('base.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="#" method="POST" class="mt-4">
                    <div class="card">
                    @csrf
                    <div class="card-header bg-primary text-light p-3">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        @if(session()->has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div> 
                        @endif
                        <label for="email">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" 
                         name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password">

                        <button type="submit" class="btn btn-primary mt-3">Login</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection('content')