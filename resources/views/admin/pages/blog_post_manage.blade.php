@extends('admin.index')
@section('Content')


        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Blog Post List</h2>
          </div>
        </div>
        <ul class="breadcrumb">
          <div class="container-fluid">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Blog Post Manage</li>
          </div>
        </ul>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <!-- Horizontal Form-->
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Basic Table</strong>
                    <div class="pull-right">
                      <h4 style="color:green;">
                        <?php
                            $message = Session::get('message');
                            if($message){
                              echo $message;
                              Session::put('message', null);
                            }
                        ?>
                      </h4>
                    </div>
                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>SL.</th>
                        <th>Blog Title</th>
                        <th>Blog image</th>
                        <th>Publication Status</th>
                        <th>Publication Change</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $i = 0;
                        foreach($BlogTable as $blog){ 
                          $i++;
                          ?>
                      <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $blog->blog_title }}</td>
                        <td><img src="../{{ $blog->blog_img }}" alt="image" width="50" height="50"></td>
                        <td>
                          <?php 
                          if($blog->publication_status == 1){ ?>
                            <span style="background: green; color: #FFF; padding: 0px 5px;">Published</span>
                        <?php }else{ ?>
                          <span style="background: red; color: #FFF;padding: 0px 5px;">Unpublished</span>
                          <?php } ?>
                      </td>
                        <td>

                          <?php 
                          if($blog->publication_status == 1){ ?>
                            <a href="{{ URL::to('/unpublish-blog/'.$blog->blogId) }}" class="btn btn-danger">Unpublished</a>
                        <?php }else{ ?>
                          <a href="{{ URL::to('/publish-blog/'.$blog->blogId) }}" class="btn btn-success">Published</a>
                          <?php } ?>
                        </td>
                        <td>
                          <a class="btn btn-primary" href="{{ URL::to('/admin/blog-edit/'.$blog->blogId) }}">Edit</a> ||
                          <a class="btn btn-danger" onclick="return confirm('Are you sure to delete?')" href="{{ URL::to('/blog-delete/'.$blog->blogId) }}">Delete</a>
                        </td>
                      </tr>

                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </section>


@endsection