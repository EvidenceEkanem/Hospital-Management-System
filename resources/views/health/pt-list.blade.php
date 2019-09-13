@extends('layout.layout')

@section('content')
    
    <section class="content">
        
        
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="btn-group"> 
                            <a class="btn btn-success" href="{{ route('add_patient') }}"> <i class="fa fa-plus"></i>  Add patient</a>  
                        </div>
                        
                    </div>
                    <div class="panel-body">
                            <div class="panel-header">
                                    <h3>Insert The Patients Identification Number (PIN) to get the users Details</h3>           
                            <div class="">
                                <div class="dataTables_length">
                                    <div class="input-group custom-search-form">
                                        <form action="{{ route('pin_view') }}" method="post">
                                            @csrf
                                            <div class="input-group">
                                                    <input type="text" name="pin" class="form-control" style="width: 300px" placeholder="Insert the Patients' Identification Number">
                                                    <div class="input-group-append" >
                                                        <button class="btn btn-primary" type="submit" id="button-addon2">Get Patients' Detail</button>
                                                    </div>
                                            </div>

                                    </form>
                                </div><!-- /input-group -->
                            </div>
                        </div>
                        
                        
                            {{-- @endforelse --}}
                    </div>


                
               
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection