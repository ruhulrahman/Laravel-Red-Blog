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
            <li class="breadcrumb-item active">Category Add</li>
          </div>
        </ul>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <!-- Basic Form-->
              <div class="col-lg-6">
                <div class="block">
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
                  <div class="title"><strong class="d-block">Add a new category</strong></div>
                  <div class="block-body">
                    {!! Form::open(['url' => '/admin/category_create', 'method' => 'post']) !!}
                    
                      <div class="form-group">
                        <label class="form-control-label">Category</label>
                        <input type="text" name="categoryName" placeholder="Enter a category" class="form-control">
                      </div>                     
                      <div class="line"></div>
                      <div class="form-group">
                        <label class="form-control-label">Publication Status</label>
                        <select name="publication_status" class="form-control">
                          <option value="1">Published</option>
                          <option value="0">Unpublished</option>
                        </select>
                      </div>
                      <div class="form-group">       
                        <input type="submit" value="Add Category" class="btn btn-primary">
                      </div>

                    {!! Form::close() !!}

                  </div>
                </div>
              </div>
              <!-- Horizontal Form-->
              <div class="col-lg-6">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Basic Table</strong></div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>SL.</th>
                        <th>Category Name</th>
                        <th>Category Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $i = 0;
                        foreach($categorySelect as $cat){ 
                          $i++;
                          ?>
                      <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $cat->categoryName }}</td>
                        <td>
                          <?php 
                          if($cat->publication_status == 1){ ?>
                            <span style="background: green; color: #FFF; padding: 0px 5px;">Published</span>
                        <?php }else{ ?>
                          <span style="background: red; color: #FFF;padding: 0px 5px;">Unpublished</span>
                          <?php } ?>
                      </td>
                        <td>
                          <a href="{{ URL::to('admin/category_edit') }}">Edit</a>
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