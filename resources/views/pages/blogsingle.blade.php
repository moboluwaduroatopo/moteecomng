@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h4>SADAQAH SUMMARY PAYMENT </h4>
  </div>
    <div class="col-lg-3 col-md-6 col-sm-12">

        
      
                <div class="form-group">

              </div></div> 
</div>
<section class="invoice-template">
 
  
  <div class="card" id="sumform">
    <div class="card-content p-3">
      <div id="invoice-template" class="card-body">
        <!-- Invoice Company Details -->
        <div id="invoice-company-details" class="row">
          <div class="col-md-6 col-sm-12 text-center text-md-left">
            <div class="media">
              <!-- <img src="app-assets/img/logos/logo-big-black.png" alt="company logo" width="80" height="80"> -->
              <div class="media-body">
                <ul class="ml-2 px-0 list-unstyled">
                  <li class="text-bold-800">LAUTECH MUSLIM GRADUATES ASSOCIATION (LAUMGA)

</li>
                  <li>ZAKAT AND SADAQAH FOUNDATION,</li>
                  <li>NIGERIA</li>
                  <!-- <li>Florida 32940,</li>
                  <li>USA</li> -->
                </ul>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-sm-12 text-center text-md-right">
            <h2>Form A1 No</h2>
            <p class="pb-3"># A1-00{{$zat->id}}</p>
            <h2>PAYMENT TO</h2> <tr>
                      
             <p><span class="text-muted">LAUMGA ZCF ACCT Name:</span> {{$set->acct_name}}</p>
            <p><span class="text-muted">{{$set->bank_name}} :</span> {{$set->acct_no}}</p>
            
         
          </div>
        </div>
        <!--/ Invoice Company Details -->
        <!-- Invoice Customer Details -->
        <div id="invoice-customer-details" class="row pt-2">
          <div class="col-sm-12 text-left">
            <p class="text-muted">Bill To</p>
          </div>
          <div class="col-md-6 col-sm-12  text-center text-md-left">
            <ul class="px-0 list-unstyled">
               <p class="text-capitalize"><span class="text-muted">Name :</span> {{Auth::user()->name}}</p>
            <p><span class="text-muted">Address :</span> {{Auth::user()->address}}</p>
            <p><span class="text-muted">Phone Number :</span> {{Auth::user()->phone}}</p>
              <!-- <li class="text-bold-800">{{Auth::user()->name}}</li>
              <li>{{Auth::user()->address}}</li>
              <li>{{Auth::user()->phone}}</li> -->
              <!-- <li>New Mexico-87102.</li> -->
            </ul>
          </div>
          <div class="col-md-6 col-sm-12 text-center text-md-right">
            <p><span class="text-muted">Form A1 Date :</span> {{$zat->created_at->format('Y-m-d')}}</p>
            <p><span class="text-muted">ZDD :</span> {{$set->ZDD}}</p>
            <p><span class="text-muted">Branch :</span> {{$set->branch}}</p>
          </div>
        </div>
        <!--/ Invoice Customer Details -->
        <!-- Invoice Items Details -->
        <div id="invoice-items-details" class="pt-2">
          <div class="row">
            <div class="table-responsive col-sm-12">
              <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>DESCRIPTION OF ITEM / PERSONAL WEALTH DONATED </th>
                    <th class="text-right">AMOUNT / VALUE (#) 
</th>
 
                  </tr>
                </thead>
                <tbody>
                 @foreach ($zak as  $index => $d)
                  <tr>
                    <th scope="row">{{ $index +1}}</th>
                    <td>
                      
                      <p class="text-muted">{{$d->description}}</p>
                    </td>
                    <td class="text-right">{{$d->amount_value}}</td>
                    
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-12 text-left">
           
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <p class="lead">TOTAL AMOUNT/VALUE DONATED</p>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                   
                    <tr class="bg-grey bg-lighten-4">
                      <td class="text-bold-800">Total</td>
                      <td class="text-bold-800 text-right">{{$zat->total}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
        
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-12 text-left">
              <p class="lead">BENEFACTOR SIGNATURE & DATE</p>
              <!-- <div class="row"> -->
                <div class="table-responsive">
                  <table class="table table-borderless table-sm">
                    <tbody>
                   
                      <tr>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                      <hr>
                    </tbody>
                  </table>
                </div>
              <!-- </div> -->
            </div>
            <div class="col-md-6 col-sm-12">
              <p class="lead">ZAKAH VALUER SIGNATURE & DATE</p>
              <div class="table-responsive">
                <table class="table table-borderless table-sm">
                  <tbody>

                     <tr>
                      <td></td>
                      <td class="text-right"></td>
                    </tr>
                    <hr>
                  </tbody>
                </table>
              </div>
            
            </div>
          </div>
        </div>
        <!-- <input type='text' name='' value=''> -->
        
      </div>
    </div>
  </div>
 <!-- Invoice Footer -->
        <div id="invoice-footer">
          <div class="row">
            <div class="col-md-9 col-sm-12">
             
            </div>
            <div class="col-md-3 col-sm-12 text-center">
              <button type="button" class="btn btn-primary btn-raised my-1" id="sumzakat"><i class="fa fa-paper-plane-o"></i> 
                DOWNLOAD FORM A1</button>
            </div>
          </div>
        </div>
        <!--/ Invoice Footer -->
</section>
<!--Invoice template ends-->




@endsection
