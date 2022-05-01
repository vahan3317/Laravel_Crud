@extends('customer/app')
@section('content')

<div class="row container  rounded  shadow-2xl shadow-md ">
      @if(session('success'))
      <p class="alert alert-success">{{ session('success') }}</p>
      @endif
{{-- NAVBAR --}}
      
    <div class="card mb-5 container-fluid bg-secondary rounded-lg ">


     <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap rounded p-2 mb-4">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0 fst-italic" href="/customer">CRUD</a>
     <div class="card-header">
      <form class=" row row-cols-auto g-1" >
       
       <div class="col">
         <input type="text" class="form-control" name="q" value="{{ $q }}" placeholder="Search...">
        </div>
        
        <div class="col">
         <button class="btn btn-info">
          Search
         </button>
        </div>
       
         <div class="col">
          <a class="btn btn-outline-info" href="{{ route('customer.create') }}">Add</a>
         </div>
         <div class="col">
         
         </div>


      </form>

     </div>
     </nav>

     {{-- sidebar --}}




     <div class="d-flex bg-light  ">
     <div class="sidebar-sticky ">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active fst-italic text-info  " href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            Dashboard <span class="sr-only  ">(current)</span>
          </a>
        </li>
        <li class="nav-item fw-lighter">
          <a class="nav-link text-muted" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
            Orders
          </a>
        </li>
        <li class="nav-item fw-lighter">
          <a class="nav-link text-muted" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
            Products
          </a>
        </li>
        <li class="nav-item fw-lighter">
          <a class="nav-link text-muted" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            Customers
          </a>
        </li>
        <li class="nav-item fw-lighter">
          <a class="nav-link text-muted" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
            Reports
          </a>
        </li>
        <li class="nav-item fw-lighter">
          <a class="nav-link text-muted" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
            Integrations
          </a>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Saved reports</span>
        <a class="d-flex align-items-center text-muted" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
        </a>
      </h6>
      
      
     
        
      </ul>
    </div>

     <div class="card-body p-0 table-responsive   ">
      <table class="table table-bordered table-striped table-hover mt-3 mr-5 ">
         <thead class="text-success rounded-lg ">
          <th>
               ID
          </th>
          <th>
               Customer Name
          </th>
          <th>
               Contact Name
          </th>
          <th>
               Address
          </th>
          <th>
               City
          </th>
          <th>
              Action
          </th>
         </thead>
      
                  <?php $no = 1 ?>
                 @foreach($customers as $customer)
                 <tr>
                     <td>
                      {{ $no++ }}
                     </td>
                     <td>
                      {{ $customer->customer_name }}
                     </td>
                     <td>
                      {{ $customer->contact_name }}
                     </td>
                     <td>
                      {{ $customer->addres }}
                     </td>
                     <td>
                      {{ $customer->city }}
                     </td>
                     <td>
                        <a href="{{ route('customer.edit',$customer) }}" class="btn btn-sm btn-outline-warning">
                        Edit
                        </a>
                        <form action="{{ route('customer.destroy',$customer) }} " method="POST" style="display:inline" onsubmit="return confirm('Delete?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger">
                            Delete?
                        </button>
                        </form>
                     </td>

                  </tr>   
                  @endforeach
                 </table>
     </div>
    
    </div>
   </div>
      </div>
@endsection