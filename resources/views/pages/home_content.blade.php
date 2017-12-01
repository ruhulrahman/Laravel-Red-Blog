@extends('home')
@section('content')


            @if($BlogTable)
               @foreach($BlogTable as $blog)
    		<div class="post_section">
            
            	<div class="post_date">
                	30<span>Nov</span>
            	</div>
                <div class="post_content">
                    <h2><a href="{{ URL::to('/single_blog/'.$blog->blogId) }}">{{ $blog->blog_title }}</a></h2>

                    <strong>Author:</strong> {{ $blog->admin_name }} | <strong>Category:</strong> <a href="{{ URL::to('blog_by_category/'.$blog->categoryId) }}">{{ $blog->categoryName }}</a>
                    
                    <a href="{{ URL::to('/single_blog/'.$blog->blogId) }}" target="_parent"><img src="{{ $blog->blog_img}}" alt="image" width="490" /></a>
                    

                    <p><a href="#" target="_parent">Red Blog </a>{{ Str::words($blog->blog_description, 30, '........') }} </p>

                    <p><a href="{{ URL::to('/single_blog/'.$blog->blogId) }}">24 Comments</a>
                    <?php
                        $stringln = strlen($blog->blog_description);
                        if($stringln >= 500){ ?>
                        | <a href="{{ URL::to('/single_blog/'.$blog->blogId) }}">Continue reading...</a>
                    <?php } ?> 
                    </p>
                </div>
                <div class="cleaner"></div>
            </div>

                        
                @endforeach
                @else
                    <h1 style="color: red">Blog post not found!!</h1>
                @endif



@endsection