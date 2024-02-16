@extends('layouts.main')

@section('container')
   <main class="form-signin">
      <div class="row d-flex justify-content-center">
         <div class="col-sm-6">

            @if (session()->has('loginErr'))
               <div class="alert alert-danger">
                  {{ session()->get('loginErr', 'Login gagal') }}
               </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
               @csrf
               <h1 class="h3 mb-3 fw-normal mt-5">Please sign in</h1>

               <div class="form-floating">
                  <input type="email" name="email" class="form-control" id="floatingInput"
                     placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
               </div>
               <div class="form-floating">
                  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
               </div>

               <button class="w-100 mt-5 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
         </div>
      </div>
   </main>
@endsection()
