@extends('layouts.app')

@section('content')
<!-- <div class="row">
  <div class="col-md-12">
    <h4>Dashboard</h4>
  </div>
</div> -->
<div class="row">
  <div class="col-12">
    <div class="content-header">Dashboard</div>
    <p class="content-sub-header">Nisab and Zakat Rate </p>
  </div>
</div>

<section id="extended">
  <div class="row">
    <div class="col-sm-12">
         @if (Auth::user()->role=='superadmin')
                 
            <div class="col-lg-4 col-md-6 col-sm-12">

        @include('includes.messages')
      
                <div class="form-group">
<button type="button" class="btn btn-outline-warning btn-block btn-lg" data-toggle="modal"
                    data-target="#bootstrap" data-backdrop="false">
                    Add New Zaket Rate
                  </button>
              </div></div> 
                       @endif
                         @if (Auth::user()->role=='admin')
      <div class="card">
        <div class="card-header">
           
          <h6 class="card-title">Adapted from The Zakat Handbook  (THE ZAKAT FOUNDATION OF AMERICA, 2007)</h6>

        </div>
        <div class="card-content">
          <div class="card-body table-responsive">
            <table class="table text-center">
              <thead>
                <tr>
                  <th>#</th>
                  <!-- <th></th> -->
                  <th>TYPE OF WEALTH</th>
                  <th>NIZAB</th>
                  <th>ZAKAT RATES</th>
                  <!-- <th>Email</th> -->
                    @if (Auth::user()->role=='superadmin')
                  <th>Actions</th>
                       @endif
                </tr>
              </thead>
              <tbody>
                @foreach ($Zakah as  $index => $d)
                <tr>
                  <td>{{ $index +1}}</td>
                
                  <td>{{$d->wealth_name}}</td>
                  <td>{{$d->nizab}}</td>
                  <td>{{$d->z_rates}}<br> {{$d->z_r_text}}</td>
                    @if (Auth::user()->role=='superadmin')
                  <td>
                   
                  <!--   <a class="success p-0" data-original-title="" title="">
                      <i class="ft-edit-2 font-medium-3 mr-2"></i>
                    </a> -->
                    <a href="{{url('/deletezaketrate/'.$d->id) }}" class="danger p-0" data-original-title="" title="">
                      <i class="ft-x font-medium-3 mr-2"></i>
                    </a>
                  </td>     @endif
                </tr>
                @endforeach
         
               
                
               
               
              </tbody>
            </table>

          </div>
        </div>
      </div>
      

       @endif
       @if (Auth::user()->role=='user') 
      <div class="row">
         @foreach ($Zakah as  $index => $d)
  <div class="col-xl-3 col-lg-6 col-md-6 col-12">
    <div class="card {{$d->color}}">
      <div class="card-content">
        <div class="card-body pt-2 pb-0">
          <div class="media">
            <div class="media-body white text-left">
              <h4 class="font-large-1 mb-0">{{$d->wealth_name}}</h4><br>
              <span>NIZAB: {{$d->nizab}}</span><br>
 <span>RATES: {{$d->z_rates}}% {{$d->z_r_text}}</span>
            </div>
            <!-- <div class="media-right white text-right"> -->
              <!-- <i class="icon-pie-chart font-large-1"></i> -->
            <!-- </div> -->
          </div>
        </div>
        
        <div id="Widget-line-chart" class="height-70 WidgetlineChart WidgetlineChartshadow mb-2">
        </div>
      </div>
    </div>
  </div>
   @endforeach
   
 

 
</div>
 @endif
  <div class="row justify-content-center">
        
     {{ $Zakah->links() }}
  </div>
<!--Statistics cards Ends-->
    </div>
  </div>
</section>
<!--Extended Table Ends-->



   <!-- Modal -->
                  <div class="modal fade text-left" id="bootstrap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3 class="modal-title" id="myModalLabel35">Add Zaket </h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
        <form method="POST" action="{{ url('storezaketrate') }}">
                        @csrf
 <fieldset class="form-group floating-label-form-group">
                              <label for="title1">Select color</label>
                              <select class="form-control" name="color">
                                <option value="gradient-blackberry">gradient-blackberry</option>
                                  <option value="gradient-ibiza-sunset">gradient-ibiza-sunset</option>
                                  <option value="gradient-green-tea">gradient-green-tea</option>
                                    <option value="gradient-pomegranate">gradient-pomegranate</option>
                                    

                              </select>
                           
                            </fieldset>
                          <div class="modal-body">
                            <fieldset class="form-group floating-label-form-group">
                              <label for="email">Wealth Name</label>
                              <input type="text" class="form-control" id="email" placeholder="Wealth Name" name="wealth_name">
                            </fieldset>
                            
                            <fieldset class="form-group floating-label-form-group">
                              <label for="title">Nizab</label>
                              <input type="text" class="form-control" id="title" placeholder="Nizab" name="nizab">
                            </fieldset>
                            
                            <fieldset class="form-group floating-label-form-group">
                              <label for="title1">Zaket Rates</label>
                             <input type="text" class="form-control" id="title" placeholder="Zaket Rates" name="z_rates">
                            </fieldset>
                            
                            <fieldset class="form-group floating-label-form-group">
                              <label for="title1">Zaket Rates Text</label>
                             <input type="text" class="form-control" id="title" placeholder="Zaket Rates Text" name="z_r_text">
                            </fieldset>
                            
                            <fieldset class="form-group floating-label-form-group">
                              <label for="title1">Zaket Role</label>
                              <select class="form-control" name="role">
                                  <option value="1">role 1</option>
                                  <option value="2">role 2</option>

                              </select>
                           
                            </fieldset>
                          </div>
                          <div class="modal-footer">
                            <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                            <input type="submit" class="btn btn-outline-primary btn-lg" value="Save">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
@endsection