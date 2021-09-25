@props(['article' => $article])

@php
  $tags_array[] = '';
  foreach($article->tags as $tag){
    $tags_array[] = $tag->name;
  }
  $article_tags = implode(',',$tags_array);
@endphp

<div class="blog-card">
    <div class="blog-img">
      <img src="{{asset($article->image)}}" alt="thumbnail" />
      <div class="blog-oly"><p>{{$article_tags}}</p></div>
    </div>
    <div class="blog-content">
      <ul class="blog-meta">
        <li>
          <i class="flaticon-calendar"></i>
          <p>{{date_format(date_create($article->created_at),'d M Y')}}</p>
        </li>
        <li>
          <i class="flaticon-share"></i>
          <p>{{$article->shares_count ?? '0'}} Shares</p>
        </li>
      </ul>
      <div class="blog-text">
        <h4>
          <a href="{{route('article',$article) ?? '#'}}"
            >{{$article->title}}</a
          >
        </h4>
      </div>
      <ul class="blog-link">
        <li><a class="btn btn-inline" href="{{route('article',$article) ?? '#'}}">read more</a></li>
        <li>
          <i class="flaticon-chat"></i>
          <p>{{$article->comments_count ?? '0'}} Comments</p>
        </li>
      </ul>
    </div>
</div>
