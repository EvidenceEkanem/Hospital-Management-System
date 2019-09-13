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

                        <h2>Welcome to <span class="text-danger">{{ $patients->first_name}}  {{ $patients->last_name}}</span>  Database</h2>                  
                        
                            
                    </div>

                                       
                </div>

                
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="success">
                        <tbody>
                            <tr >
                                <th>
                                    First Name
                                </th>
                                <td>
                                    {{ $patients->first_name}}
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    Last Name
                                </th>
                                <td>
                                    {{ $patients->last_name}}
                                </td>
                            </tr>
                            <tr>
                                    <th>
                                        Email
                                    </th>
                                    <td>
                                        {{ $patients->email}}
                                        
                                    </td>
                                </tr>

                                <tr>
                                        <th>
                                            PIN
                                        </th>
                                        <td>
                                                {{ $patients->pin}}
                                            
                                        </td>
                                </tr>
                                <tr>
                                        <th>
                                            Phone Number
                                        </th>
                                        <td>
                                    {{ $patients->phone_number}}
                                           
                                            
                                        </td>
                                </tr>
                                <tr>
                                        <th>
                                            Address
                                        </th>
                                        <td>
                                    {{ $patients->address}}
                                                
                                            
                                        </td>
                                </tr>
                                <tr>
                                        <th>
                                            Gender
                                        </th>
                                        <td>
                                    {{ $patients->sex}}
                                               
                                            
                                        </td>
                                </tr>
                            <tr>
                                <th>Blood Group</th>
                                <td>
                                        {{ $patients->blood_group}}
                                </td>
                            </tr>
    </tbody>
    </table>
    </div>

    </div>
    </div>
    </div>
    </div>
    </section>
@endsection