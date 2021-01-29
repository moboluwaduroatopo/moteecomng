@extends('layouts.app')

@section('content')
<!-- <div class="row">
  <div class="col-md-12">
    <h4>Setting</h4>
  </div>
</div> -->
<section id="basic-form-layouts">
  <div class="row">
    <div class="col-sm-12">
      <div class="content-header">Setting</div>
    </div>
  </div>
 <div class="row match-height">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
        	 @include('includes.messages')
          <!-- <h4 class="card-title" id="basic-layout-form-center">Event Registration</h4> -->
          <!-- <p>This example shows a way to center your form in the card. Here we have used</p> -->
        </div>
        <div class="card-content">
          <div class="px-3">

          <form method="POST" action="{{ url('setting') }}">
                        @csrf

              <div class="row justify-content-md-center">
                <div class="col-md-6">
                  <div class="form-body">
                    <div class="form-group">
                      <label for="eventInput1">Zakah Bank Name</label>
                      <input type="text" id="eventInput1" 
                      value="{{$set->bank_name}}" class="form-control" name="bank_name">
                    </div>
<div class="form-group">
                      <label for="eventInput1">Zakah Account Name</label>
                      <input type="text" id="eventInput1" 
                      value="{{$set->acct_name}}" class="form-control" name="acct_name">
                    </div>
                    <div class="form-group">
                      <label for="eventInput1">Zakah Account Number</label>
                      <input type="text" id="eventInput1" 
                      value="{{$set->acct_no}}" class="form-control" name="acct_no">
                    </div>
                    <div class="form-group">
                      <label for="eventInput2">Branch</label>
                      <input type="text" id="eventInput2" class="form-control" name="branch" value="{{$set->branch}}">
                    </div>

                    <div class="form-group">
                      <label for="eventInput3">ZDD</label>
                      <input type="date" id="eventInput3" class="form-control" name="ZDD" value="{{$set->ZDD}}">
                    </div>
                    <input type="hidden" name="id" value="{{$set->id}}">
<!-- 
                    <div class="form-group">
                      <label for="eventInput4">Email</label>
                      <input type="email" id="eventInput4" class="form-control" name="email">
                    </div>
 -->
                   

                  </div>
                </div>
              </div>

              <div class="form-actions center">
               <!--  <button type="button" class="btn btn-raised btn-warning mr-1">
                  <i class="ft-x"></i> Cancel
                </button> -->
                <button type="submit" class="btn btn-raised btn-primary">
                  <i class="fa fa-check-square-o"></i> Update
                </button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
