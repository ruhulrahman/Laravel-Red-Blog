@extends('admin.index')
@section('Content')

        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Blog Update Page</h2>
          </div>
        </div>
        <ul class="breadcrumb">
          <div class="container-fluid">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Blog Post Update</li>
          </div>
        </ul>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">

              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>All form elements</strong>
                    <div class="pull-right">
                  <h4 style="color:red;">
                    <?php
                        $exception = Session::get('exception');
                        if($exception){
                          echo $exception;
                          Session::put('exception', null);
                        }
                    ?>
                  </h4>

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
                  <div class="block-body">
                    {!! Form::open(['url' => '/admin/blog-update', 'method' => 'post', 'enctype'=>'multipart/form-data']) !!}
                      @foreach($BlogTable as $blog)
                      <div class="form-group row">
                        <input type="hidden" name="blogId" value="{{ $blog->blogId }}">
                        <label class="col-sm-3 form-control-label">Blog Title</label>
                        <div class="col-sm-9">
                          <input type="text" name="blog_title" value="{{ $blog->blog_title }}" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Select Category</label>
                        <div class="col-sm-9 select">


                          <select name="categoryId" class="form-control">
                            <?php
                              foreach ($CategoryTable as $cat) { ?>
                            <option 
                              <?php if($blog->categoryId == $cat->categoryId){ ?>
                              selected="selected"
                              <?php } ?>
                            value="{{ $cat->categoryId }}">{{ $cat->categoryName }}</option>
                          <?php } ?>

                          </select>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row has-success">
                        <label class="col-sm-3 form-control-label">Blog Description</label>
                        <div class="col-sm-9">
                          <textarea name="blog_description" id="" cols="30" rows="10" class="form-control">{{ $blog->blog_description }}</textarea>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Blog Image</label>
                        <div class="col-sm-9">
                          <div class="input-group">
                            <div class="input-group-btn">
                              <input type="file" name="blog_img" id="" class="form-control"> 
                            <img src="../../{{ $blog->blog_img }}" alt="image" width="50" height="50">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Publication Status</label>
                        <div class="col-sm-9 select">
                          <select name="publication_status" class="form-control">
                          <?php
                            if($blog->publication_status == 1){ ?>
                              <option value="1" selected="selected">Published</option>
                              <option value="0">Unpublished</option>
                          <?php }else{ ?>
                            <option value="0" selected="selected">Unpublished</option>
                            <option value="1">Published</option>
                          <?php } ?>
                          </select>
                        </div>
                      </div>

                      @endforeach

                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-primary">Publish Post</button>
                        </div>
                      </div>
                    {!! Form::close() !!}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


@endsection