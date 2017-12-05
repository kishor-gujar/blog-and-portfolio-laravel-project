<article class="card wow fadeInLeft animation-delay-5 mb-4" style="visibility: visible; animation-name: fadeInLeft;">
  <div class="card-block">
    <div class="row">
      <div class="col-xl-6">
        <img src="storage/{{$post->image}}" alt="{{$post->title}}" class="img-fluid mb-4"> </div>
      <div class="col-xl-6">
        <h3 class="no-mt">
          <a href="{{ route('blog.single',[$post->id, $post->slug]) }}">{{$post->title}}</a>
        </h3>
        <p class="mb-4">{{$post->excerpt}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <img style="width: 80px; height: 80px;" src="{{ url('storage/'.$post->authorId->avatar) }}" alt="{{$post->authorId->name}} img" class="rounded-circle mr-1"> by
        <a href="javascript:void(0)">{{$post->authorId->name }}</a> in
        <a href="{{ route('blog.category',[$post->category_id, $post->category->slug]) }}" class="ms-tag ms-tag-info">{{ $post->category->name }}</a>
        <span class="ml-1 d-none d-sm-inline">
          <i class="zmdi zmdi-time mr-05 color-info"></i>
          <span class="color-medium-dark">{{ date('F d, Y', strtotime($post->created_at)) }}</span>
        </span>
      </div>
      <div class="col-lg-4 text-right">
        <a href="{{ route('blog.single',[$post->id, $post->slug]) }}" class="btn btn-primary btn-raised btn-block animate-icon">Read More
          <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</article>