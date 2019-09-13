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

                        @if(session('success'))
                        <div class="alert alert-primary" role="alert">
                                {{ session('success') }}
                              </div>
                            @endif
                        
                        
                            
                    </div>

                                       
                </div>

                
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="success">
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>PIN</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>sex</th>
                                <th>Blood group</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patients as $patient)
                            <tr >
                            <td>
                                  {{ $patient->first_name}}

                                   {{ $patient->last_name}}
                            </td>
                            <td>
                                    {{ $patient->email}}
                            </td>
                            <td>
                                    {{ $patient->pin}}
                            </td>
                            <td>
                                    {{ $patient->phone_number}}
                            </td>
                            <td>
                                    {{ $patient->address}}
                            </td>
                            <td>
                                    {{ $patient->sex}}
                            </td>
                            <td>
                                    {{ $patient->blood_group}}
                            </td>
                        </tr>
                    
                        @endforeach
                        
                        
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