@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-5">
    
    <main class="form-regisration">
      <h1 class="h3 mb-3 fw-normal text-center">Registrasion Form</h1>
        <form action="/register" method="post">
            @csrf
       <div class="form-floating ">
            <label for="name">Name</label>
            <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" required value="{{ old('nama') }}">
            @error('name')
                
            <div class="invalid-feedback">
                {{ $message }}
              </div>  

            @enderror  
        </div>
          <div class="form-floating ">
            <label for="username">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" required value="{{ old('username') }}">
            @error('username')
                
            <div class="invalid-feedback">
                {{ $message }}
              </div>  

            @enderror    
        </div>
          <div class="form-floating ">
            <label for="floatingInput">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="Email address" name="email" required value="{{ old('email') }}">
            @error('email')
                
            <div class="invalid-feedback">
                {{ $message }}
              </div>  

            @enderror    
        </div>
          <div class="form-floating ">
            <label for="floatingInput">Password</label>
            <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required>
            @error('password')
                
            <div class="invalid-feedback">
                {{ $message }}
              </div>  

            @enderror    
        </div>
          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
        
        </form>
        <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
      </main>
  </div>
</div>

@endsection