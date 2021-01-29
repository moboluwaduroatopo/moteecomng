@extends('layouts.app')

@section('content')

<section id="list">
  @if($zat)
  

  <div class="row">
    <div class="col-sm-12">
      <div class="content-header">List of SADAQAH </div>
      <!-- <p class="content-sub-header">List groups are a flexible and powerful component for displaying not only simple
        lists of elements, but complex ones with custom content.</p> veritied complete payment-->
      @include('includes.messages')
    </div>
  </div>
  <div class="row match-height">
    <!--Basic List Group Starts-->

      @foreach ($zat as  $index => $d)
    <div class="col-sm-12 col-md-6 col-lg-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title text-capitalize">{{$d->name}}</h3>
         <h4 class="card-title">Form A1 No</h4>
          <p># A1-00{{$d->id}} </p>
        </div>
        <div class="card-content">
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item">TOTAL AMOUNT/VALUE DONATED:# {{$d->total}}</li>
              <li class="list-group-item">Payment Mode: {{$d->payment}}</li>
              <!-- <li class="list-group-item">Amount Paid:# {{$d->amount_value}} </li> -->
              <li class="list-group-item ">Payment Status: <a class="btn white btn-round btn-primary">{{$d->status}}</a></li>
              <!-- {{$set->ZDD}} -->
              <?php $date= date('Y-m-d')?>
            <!-- {{$date}} -->
             <!--  @if ($set->ZDD < $date)
              @if ($d->status == 'pending' )
              <li class="list-group-item">Zakah Due Date: <a class="btn white btn-round btn-danger"> Expire </a></li>
            @endif
              @endif -->
              <!-- <li class="list-group-item"><a href="{{url('/ZAKAH_B_PAYMENT/'.$d->id) }}">Summary Payment</a></li> -->
              <li class="list-group-item"><a href="{{url('/SADAQAH_SUMMARY_PAYMENT/'.$d->id) }}">Summary Payment</a></li>
              <li class="list-group-item"><a href="{{url('/SADAQAH_RECEIPT/'.$d->id) }}">Get Receipt</a></li>
             
               @if (Auth::user()->role=='admin')
                @if ($d->status=='pending')
                <li class="list-group-item"><a href="{{url('/SADAQAH_P_COMPLETE/'.$d->id) }}" class=" btn btn-success">Paid</a></li>
               @endif
                @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
     @endforeach
  </div>
  <div class="row justify-content-center">
     {{ $zat->links() }}
  </div>

  @else
   <div class="card">
    <div class="card-content p-3">
      <div id="invoice-template" class="card-body">
 <p>No Record Found</p>
</div></div></div>
  @endif
</section>
<!--Invoice template ends-->








  

@endsection
