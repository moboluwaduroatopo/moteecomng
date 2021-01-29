@extends('layouts.app')

@section('content')
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="mb-0">Profile Details</h2>
          {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> --}}
        </div>
      </div>
    </div>
  </div> 


<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">Profile Details</span>
  </div>
</div>
<div class="row col-md-6  justify-content-center">
        @include('includes.messages')
      </div>
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <!-- <h2 class="my-5 h2 text-center">Profile Details</h2> -->

      <!--Grid row-->
      <div class="row">

            <div class="col-md-4">

          <img src="nuesa/public/upload/{{Auth::user()->user_image}}">
{{-- <label>update file
         <input type="file" class="btn btn-success">
</label> --}}

                </div>



        <!--Grid column-->
        <div class="col-md-8">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">

        
             
              <!--email-->
              <div class="md-form mb-5">
                <input type="text" id="email" class="form-control" placeholder="{{Auth::user()->name}}"  disabled='disabled'>
              
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="address" class="form-control" placeholder="{{Auth::user()->chapter_name}}"  disabled="disabled">
              
              </div>

              <!--address-2-->
              <div class="md-form mb-5">
                <input type="text" id="address-2" class="form-control" placeholder="{{Auth::user()->origin}}" disabled="disabled">
               
              </div>
                <div class="md-form mb-5">
                <input type="text" id="email" class="form-control" placeholder="{{Auth::user()->phone}}" disabled="disabled">
                
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="address" class="form-control" placeholder="{{Auth::user()->matricno}}" disabled="disabled">
                
              </div>

              <!--address-2-->
              <div class="md-form mb-5">
                <input type="text" id="address-2" class="form-control" placeholder="{{Auth::user()->chapter_id}}" disabled="disabled">
                
              </div>


             

             

              
              
             
              <hr class="mb-4">
          
<!-- Button trigger modal -->
<button type="button" class="btn btn-success text-white" data-toggle="modal" data-target="#basicExampleModal">
       Update Profile
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update Details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
        




         <div >
          <!--  <div class="">


        <div class=""> -->
         
            <div class="col-md-12">
                   {!! Form::open(['action'=>'UserController@updateprofile','method' => 'POST' ,'enctype'=>'multipart/form-data']) !!}
                <div class="row">
                  <div class ="col-md-12 form-group" >
                    <input type="file" id="file-upload" name="file"  />
                    <label for="file-upload" class="btn btn-success text-white">Upload file</label>
                    <div id="file-upload-filename"></div>
</div>
                    <div class="col-md-12 form-group">
                        <label for="pword2">Name</label>
                        <input id="pword2" type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                    </div>
                    <!-- <div class="col-md-12 form-group">
                            <label for="pword2">Chapter Abbreviation</label>
                            <input id="pword2" type="text" class="form-control" name="chapter_name" value="{{Auth::user()->chapter_name}}">
                        </div> -->
                        <div class="col-md-12 form-group">
                                <label for="pword2">Matic No</label>
                                <input id="pword2" type="text" class="form-control" name="matricno" value="{{Auth::user()->matricno}}">
                            </div>
                             <div class="col-md-12 form-group">
                                <label for="pword2">Phone</label>
                                <input id="pword2" type="text" class="form-control" value="{{Auth::user()->phone}}" name="phone">
                            </div>
                             <div class="col-md-12 form-group">
                                <label for="pword2">Origin</label>
                                <input id="pword2" type="text" class="form-control" name="origin" value="{{Auth::user()->origin}}">
                            </div>
                          
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="submit" value="{{ __('Save') }}" class="btn btn-success text-white btn-lg px-5">
                    </div>
                </div>
                 {!! Form::close() !!}
            </div>
                
        <!-- </div> -->
        

      
  <!--   </div>
</div> -->










            </div>
           <!--  <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success text-white">Save changes</button>
            </div> -->
          </div>
        </div>
      </div>
            </div>
          </div>
        </div>
    
</div>
        <!--Grid column-->
        
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
 
  
@endsection
