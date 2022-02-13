@if (count($articles) != 0)
{{-- <div class=" wow fadeInUp">
  <div class="section-header">
    <h3 class="section-title" style="padding-bottom: 10px;">Our Article</h3>
    <form action="{{route('article')}}" class="mt-5">
      <div class="input-group mb-4 border rounded-pill shadow-lg" style="border-radius:10px; box-shadow: 3px 3px 8px grey;">
        <input type="text" name="s" value="{{Request::get('s')}}" placeholder="Search title/topics?" class="form-control bg-none border-0" style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
        <div class="input-group-append border-0">
          <button type="submit" class="btn text-success"><i class="fa fa-search"></i></button>
        </div>
      </div>
    </form>
    <!-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
  </div>
</div> --}}
<div class=" wow fadeInUp">
  <div class="row justify-content-left">
    @foreach ($articles as $article)
    @if( $article->deleted_at == NULL and $article->status == 'PUBLISH')
    <div class="card-deck col-lg-12 col-sm-12 mb-2">
      <div class="card mb-2">
        <div class="row no-gutters">
          <div class="col-md-4"  style="width: 100px; height: 100px;">
            <img src="{{asset('articles_image/'.$article->image)}}" alt="Card image cap"  style="width: 100%;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$article->title}}</h5>
              <p><small class="text-muted">{{date('d M Y', strtotime($article->created_at))}}</small></p>
              <p class="card-text text-justify">{!! Str::limit( strip_tags( $article->content ), 150 ) !!}</p>
            </div>
            <div class="card-footer"  style="border: none; text-align: right;">
              <a class="btn" href="{{route('article.show', $article->slug)}}" >Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="card-deck col-lg-6 col-sm-6 mb-3">
      <div class="card">
          <img class="card-img-top" src="{{asset('articles_image/'.$article->image)}}" alt="Card image cap">
          <div class="card-body text-grey" style="padding-bottom: 10px;">
            <h5 class="card-title">{{$article->title}}</h5>
            <small class="text-muted">{{date('d M Y', strtotime($article->created_at))}}</small>
            <p class="text-description">{{ Str::limit( strip_tags( $article->content ), 100 ) }}</p>
          </div>
          <div class="card-footer">
            <a class="btn btn-primary" href="{{route('article.show', $article->slug)}}" >Read more</a>
          </div>
      </div>
    </div> -->
    @endif
    @endforeach
  </div>
</div>

@else
<style>
  .page {
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 100;
    height: 100vh;
  }
</style>
<div class="full-height bg-white mt-5 d-flex align-items-center justify-content-center" style="height: 10vh;">
  <div class="code font-weight-bold text-center" style="border-right: 3px solid; font-size: 60px; padding: 0 15px 0 15px;">
    404
  </div>
  <div class="text-center" style="padding: 10px; font-size: 46px;">
    Not Found
  </div>
</div>
@endif