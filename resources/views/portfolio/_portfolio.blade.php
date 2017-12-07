<div class="col-lg-4 col-md-6 mix category-1" style="display: inline-block;" data-bound="">
    <div class="card">
        <figure class="ms-thumbnail">
            <img src="{{ $portfolio->image1 }}" alt="{{ $portfolio->title }}" class="img-fluid">
            <figcaption class="ms-thumbnail-caption text-center">
                <div class="ms-thumbnail-caption-content">
                    <h4 class="ms-thumbnail-caption-title mb-2">{{ $portfolio->title }}</h4>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                        <i class="zmdi zmdi-favorite"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                        <i class="zmdi zmdi-star"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                        <i class="zmdi zmdi-share"></i>
                    </a>
                </div>
            </figcaption>
        </figure>
        <div class="card-block text-center portfolio-item-caption">
            <h3 class="color-primary no-mt"><a href="{{ route('portfolio.single',[$portfolio->id, $portfolio->slug]) }}">{{ $portfolio->title }}</a></h3>
            <p>{{ $portfolio->excerpt}}</p>
        </div>
    </div>
</div>

