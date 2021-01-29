@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-12">
    <h4>SADAQAH COLLECTION RECEIPT</h4>
  </div>
    <div class="col-lg-3 col-md-6 col-sm-12">

        
      
                <div class="form-group">

              </div></div> 
</div>
<section class="invoice-template">
  @if($zat)
  
  <div class="card" id="sform">
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
            <h2>Form A3 No</h2>
            <p class="pb-3"># A3-00{{$zat->id}}</p>
             <h2>PAYMENT TO</h2> 
                      
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
               <p class="text-capitalize"><span class="text-muted">Name :</span> {{$zat->name}}</p>
            <p><span class="text-muted">Address :</span> {{$zat->address}}</p>
            <p><span class="text-muted">Phone Number :</span> {{$zat->phone}}</p>
           
            </ul>
          </div>
          <div class="col-md-6 col-sm-12 text-center text-md-right">
            <p><span class="text-muted">Form A1 Date :</span> {{$zat->created_at->format('Y-m-d')}}</p>
            <p><span class="text-muted">ZDD :</span> {{$set->ZDD}}</p>
            <p><span class="text-muted">Branch :</span> {{$set->branch}}</p>
             <p><span class="text-muted">LAUMGA ZAKAH & SADAQAH COLLECTOR ID NO:</span>………………… </p>
          </div>
        </div>
        <!--/ Invoice Customer Details -->
        <!-- Invoice Items Details -->
        <div id="invoice-items-details" class="pt-2">
          <div class="row">
            <div class="table-responsive col-sm-12">
         
            </div>
          </div>
          <div class="row">
           
            <div class="col-md-12 col-sm-12">
              <p class="lead">This is to certify receipt of  <u style="text-underline-position: under;color: black;font-weight: 150px;font-size: 25px"><?php
$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
echo $f->format($zat->total);

?> Naira</u>  <span style="color: black">(#   {{$zat->total}}                            : 00    K)</span>
for the  total value of Sadaqah donated for the above-named foundation for the benefits of Muslim Ummah. 

</p>
         <?php
         
?>
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
              <p class="lead">ZAKAH & SADAQAH COLLECTOR SIGNATURE & DATE</p>
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
        <!-- Invoice Footer -->
       
        <!--/ Invoice Footer -->
      </div>
      
      
    </div>
  </div>
   <div id="invoice-footer">
          <div class="row">
            <div class="col-md-9 col-sm-12">
              
            </div>
            <div class="col-md-3 col-sm-12 text-center">
              <button type="button" class="btn btn-primary btn-raised my-1" id="sreceipt"><i class="fa fa-paper-plane-o"></i> 
                DOWNLOAD FORM A3</button>
            </div>
          </div>
        </div>
  <!-- <div id="elementH"></div> -->
  @else
   <div class="card">
    <div class="card-content p-3">
      <div id="invoice-template" class="card-body">
 <p>No Record Found</p>
</div></div></div>
  @endif
</section>
<!--Invoice template ends-->








      <script> 
      console.log(document.getElementById("sform"))
</script>

@endsection
