@extends('layouts.dashapp')
@section('my-content')
<h3 class="text-center">Welcome to Forum Setting</h3>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update') }}</div>

                <div class="card-body">
                    <!-- <form method="POST" action="{{ route('register') }}"> -->
                        {!! Form::open(['action'=>['ChaptersController@forumsetting'],'method' => 'PUT']) !!}
                        <input type="" name="id" value="{{$chat->id}}" hidden>
                         <div class="form-group row">
                            {{Form::label('title', 'Status', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('status',$chat->status,['class'=>'form-control'])}}
                                
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                 <!--    </form> -->
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
