<section class="radial-progress-section section" style="background-image: url({{asset('/storage/pictures').'/'.$pictures_radial->cover_images}});">
    <div class="container">
        <div class="row">
            @if(!empty($skills))
                @foreach($skills as $skill)
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="radial-prog-area margin-b-30">
                            <div class="radial-progress" data-prog-percent=".{!! $skill->count !!}">
                                <div></div>
                                <h6 class="progress-title">{!! $skill->title !!}</h6>
                            </div>
                        </div><!-- radial-prog-area-->
                    </div><!-- col-sm-6-->
                @endforeach
            @endif
        </div><!-- row -->
    </div><!-- container -->
</section><!-- radial-progress-section -->