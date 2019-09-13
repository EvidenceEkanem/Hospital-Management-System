@extends('layout.layout')

@section('content')
    
<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- Form controls -->
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="btn-group"> 
                        <a class="btn btn-primary" href="pt-list.html"> 
                            <i class="fa fa-list"></i>  patient List </a>  
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="col-sm-6" action="/add" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Enter last Name" required>
                            </div>
                            <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                                </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="number" class="form-control" name="phone_number" placeholder="Enter Mobile" required>
                            </div>
{{--                             
                            <div class="form-group">
                                <label>Picture upload</label>
                                <input type="file" name="image">
                            </div> --}}
                            
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input name="date_of_birth" class="form-control" type="date">
                            </div>
                            <div class="form-group">
                                <label>Blood group</label>
                                <select class="form-control" name="blood_group">
                                    <option value="A+">A+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="0+">O+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="B+">B+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="0-">O-</option>
                                </select>
                            </div>
                            <div class="form-group">
                             <label>Sex</label><br>
                             <label class="radio-inline"><input name="sex" value="male" checked="checked" type="radio">Male</label> 
                             <label class="radio-inline"><input name="sex" value="female" type="radio">Female</label>

                         </div>                                      

                      <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" rows="3" name="address" required></textarea>
                    </div>
                    <div class="reset-button">
                     <input type="submit" class="btn btn-success" value="Save">
                 </div>
             </form>
         </div>
     </div>
 </div>
</div>
@endsection
