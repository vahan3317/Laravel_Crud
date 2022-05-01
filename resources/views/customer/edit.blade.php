@extends('customer/app')
@section('content')
<div class="row container ">
 <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap rounded p-2 mb-4">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0 fst-italic " href="/customer">CRUD</a>
 </nav>
 <div class="col-md-6 container  shadow-lg rounded border-info  bg-light">
      @if($errors->any())
      @foreach($errors->all() as $err)
      <p class="alert alert-danger">{{ $err }}</p>
      @endforeach
      @endif
  <form method="POST" action="{{ route('customer.update',$customer) }}">
    @csrf
      @method('PUT') 
      <div class="mb-3">
       
        <label >
         Customer Name
        </label>
        <span class="text-danger"></span>
       
       <input type="text" class="form-control" name="customer_name" value="{{ old('customer_name',$customer->customer_name) }}">

      </div>
      <div class="mb-3">
       
        <label >
        Contact Name
        </label>
        <span class="text-danger"></span>
       
       <input type="text" class="form-control" name="contact_name" value="{{ old('contact_name',$customer->contact_name) }}">

      </div>
      <div class="mb-3">
       
        <label >
         Address
        </label>
        <span class="text-danger"></span>
      
       <input type="text" class="form-control" name="addres" value="{{ old('addres',$customer->addres) }}">

      </div>
      <div class="mb-3">
       
        <label >
         City
        </label>
        <span class="text-danger"></span>
       
       <input type="text" class="form-control" name="city" value="{{ old('city',$customer->city) }}">

      </div>
      <div class="mb-3">
       
        <button class="btn btn-success">
          Add
        </button>
        <a href="{{ route('customer.index') }}" class="btn btn-secondary">Go Back</a>
     </div>


  </form>
 </div>
</div>
@endsection