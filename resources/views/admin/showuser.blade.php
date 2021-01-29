@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="content-header">User</div>
    <p class="content-sub-header">Table of  Zakat Users </p>
  </div>
</div>

<section id="extended">
  <div class="row">
    <div class="col-sm-12">
        
                 
            <div class="col-lg-4 col-md-6 col-sm-12">

        @include('includes.messages')
      
                </div> 
                      
      <div class="card">
        <div class="card-header">
           
        

        </div>
        <div class="card-content">
          <div class="card-body table-responsive">
            <table class="table text-center">
              <thead>
                <tr>
                  <th>#</th>
                  <!-- <th></th> -->
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  
          
                  <th>Actions</th>
                   
                </tr>
              </thead>
              <tbody>
                @foreach ($user as  $index => $d)
                <tr>
                  <td>{{ $index +1}}</td>
                
                  <td>{{$d->name}}</td>
                  <td>{{$d->email}}</td>
                  <td>{{$d->phone}}</td>
                  <td>{{$d->address}}</td>
                   
                  <td>
                   
                  <!--   <a class="success p-0" data-original-title="" title="">
                      <i class="ft-edit-2 font-medium-3 mr-2"></i>
                    </a> -->
                    <a href="{{url('/deletezaketuser/'.$d->id) }}" class="danger p-0" data-original-title="" title="">
                      <i class="ft-x font-medium-3 mr-2"></i>
                    </a>
                  </td>    
                </tr>
                @endforeach
         
               
                
               
               
              </tbody>
            </table>
          </div>
        </div>
         <div class="row justify-content-center">
        
     {{ $user->links() }}
  </div>
      </div>
    </div>
  </div>
</section>
<!--Extended Table Ends-->


@endsection