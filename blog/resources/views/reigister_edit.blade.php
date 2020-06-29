@extends('layouts.master')
@section('title','Admin | Register-Edit')



@section('content')



<div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="{{asset('dashboard')}}">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./icons.html">
              <i class="now-ui-icons education_atom"></i>
              <p>Icons</p>
            </a>
          </li>
          <li>
            <a href="./map.html">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="{{asset('register')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>


    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="card">
    				<div class="card-header">
    					<h3>Edit Role for Registered User</h3>
    				</div>

    				<div class="card-body">
    					<div class="row">
    						<div class="col-md-6">
    							<form action="/role-register-update/{{ $users->id }}" method="POST">
    								{{ csrf_field() }}
    								{{ method_field('PUT') }}
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="username"class="form-control" value="{{ $users->name }}"  placeholder="user-name">
  </div>
  <div class="form-group">
    <label>Give Role</label>
    <select name="usertype" class="form-control">
      <option value="admin">Admin</option>
      <option value="vendor">Vendor</option>
      <option value="">None</option>
      
    </select>
  </div>


                <button class="btn btn-success">Update</button>
                <a class="btn btn-danger" href="/register">Cancel</a>
</form>
    						</div>
    					</div>
    				</div>
    				
    			</div>
    		</div>
    		
    	</div>
    </div>



@endsection






@section('script')



@endsection