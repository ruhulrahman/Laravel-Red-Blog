@extends('admin.index')
@section('sideMenu')

      <nav id="sidebar">
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{ asset('admin_asset/img/avatar-6.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">{{ Session::get('adminName') }}</h1>
            <p>PHP and Laravel Programmer</p>
          </div>
        </div><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li class="active"><a href="{{ URL::to('/dashboard') }}"><i class="icon-home"></i>Home</a></li>

          <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Dropdown </a>
            <ul id="dashvariants" class="collapse list-unstyled">
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
            </ul>
          </li>

          <li><a href="#category" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Category</a>
            <ul id="category" class="collapse list-unstyled">
              <li><a href="{{ URL::to('/admin/category_add') }}">Add Category</a></li>
              <li><a href="{{ URL::to('/admin/category_manage') }}">Category Manage</a></li>
            </ul>
          </li>

          <li><a href="#blogpost" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Blog Post</a>
            <ul id="blogpost" class="collapse list-unstyled">
              <li><a href="{{ URL::to('/admin/blog_post_add') }}">Add New Post</a></li>
              <li><a href="{{ URL::to('/admin/blog_post_manage') }}">Post List</a></li>
            </ul>
          </li>

          <li> <a href="tables.html"> <i class="icon-grid"></i>Tables</a></li>
          <li> <a href="tables.html"> <i class="icon-grid"></i>Tables</a></li>
          <li> <a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>
          <li> <a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
          <li> <a href="{{ URL::to('admin/login') }}"> <i class="icon-logout"></i>Login Page</a></li>
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-light-bulb"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
        </ul>
      </nav>

@endsection