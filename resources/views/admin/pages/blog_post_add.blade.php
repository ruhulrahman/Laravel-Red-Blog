@extends('admin.index')
@section('Content')

        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Forms</h2>
          </div>
        </div>
        <ul class="breadcrumb">
          <div class="container-fluid">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Blog Post</li>
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
                    {!! Form::open(['url' => '/admin/blog_create', 'method' => 'post', 'enctype'=>'multipart/form-data']) !!}
                      <div class="form-group row">
                        <input type="hidden" name="authorId" value="{{ Session::get('adminId') }}">
                        <label class="col-sm-3 form-control-label">Blog Title</label>
                        <div class="col-sm-9">
                          <input type="text" name="blog_title" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Select Category</label>
                        <div class="col-sm-9 select">


                          <select name="categoryId" class="form-control">
                            <?php
                              foreach ($CategoryTable as $cat) { ?>
                            <option value="{{ $cat->categoryId }}">{{ $cat->categoryName }}</option>
                          <?php } ?>

                          </select>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row has-success">
                        <label class="col-sm-3 form-control-label">Blog Description</label>
                        <div class="col-sm-9">
                          <textarea name="blog_description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Blog Image</label>
                        <div class="col-sm-9">
                          <div class="input-group">
                            <div class="input-group-btn">
                              <input type="file" name="blog_img" id="" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Publication Status</label>
                        <div class="col-sm-9 select">
                          <select name="publication_status" class="form-control">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                          </select>
                        </div>
                      </div>
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