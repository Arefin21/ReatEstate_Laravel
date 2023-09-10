@extends('admin.admin_dashboard')
@section('admin')

<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>

<div class="page-content">

    <div class="row profile-body">

      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
          
            <div class="card">
                <div class="card-body">
  
                <h6 class="card-title">Edit Admin</h6>

            <form id="myForm" method="POST" action="{{route('update.admin',$user->id)}}" class="forms-sample">
                @csrf

                <div class="form-group mb-3">
                    <label for="exampleInputUsername1" class="form-label">Admin User Name</label>
                    <input type="text" name="username" class="form-control" value="{{$user->username}}">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputUsername1" class="form-label">Admin Name</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputUsername1" class="form-label">Admin Email</label>
                    <input type="email" name="email" class="form-control" value="{{$user->email}}">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputUsername1" class="form-label">Admin Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputUsername1" class="form-label">Admin Address</label>
                    <input type="text" name="address" class="form-control" value="{{$user->address}}">
                </div>

                <div class="form-group mb-3">
                    <label for="exampleInputUsername1" class="form-label"> Role Name</label>
                    <select name="roles" class="form-select" id="exampleFormControlSelect1">
                        <option selected="" disabled="">Select Role</option>

                    @foreach ($roles as $role)         
                        <option value="{{$role->id}}" {{$user->hasRole($role->name)?'selected':''}}>
                            {{$role->name}}</option>
                    @endforeach

                    </select>
                </div>


            
            <button type="submit" class="btn btn-primary me-2">Update Admin</button>
                
            </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>



@endsection