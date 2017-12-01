@extends('home')                
@section('recent_blog')
				@if(isset($recentBlogTable))
                <h4>Recent Blog</h4>
                <ul class="templatemo_list">
                	@foreach($recentBlogTable as $blog)
                    <li><a href="{{ URL::to('/single_blog/'.$blog->blogId) }}" target="_parent">{{ $blog->blog_title }}</a></li>
                    @endforeach
                </ul>
				@endif
@endsection