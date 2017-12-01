@extends('home')
@section('content')


    		<div class="post_section">
            
            	<div class="post_date">
                	30<span>Nov</span>
            	</div>
                <div class="post_content">
                    @if($BlogTable)
                       @foreach($BlogTable as $blog)
                            <h2><a href="blog_post.html">{{ $blog->blog_title }}</a></h2>

                            <strong>Author:</strong> {{ $blog->admin_name }} | <strong>Category:</strong> <a href="#">{{ $blog->categoryName }}</a>
                            
                            <img src="../{{ $blog->blog_img}}" alt="image" width="490" />
                            
                            <p>{{ $blog->blog_description }} </p>
                        @endforeach
                    @else
                        <h1 style="color: red">Blog post not found!!</h1>
                    @endif
                </div>
                <div class="cleaner"></div>
            </div>


@endsection