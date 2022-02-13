@if ($article != null)
<div class="wow fadeInUp mr-lg-4">
  <div class="row justify-content-left">
    <div class="section-header mt-3">
      <div class="col-12">
        <div class="mb-3">
          <div class="text-dark" style="font-size: 40px; line-height: 1.3; text-transform: uppercase;">
            {{$article->title}}
          </div>
          <div class="mt-1">
            <small class="font-italic">Created at : {{date('d M Y', strtotime($article->created_at))}} |  Author : {{$article->author}}</small>
          </div>
        </div>
        <img class="images__single" src="{{asset('articles_image/'.$article->image)}}" alt="">
        <p class="mb-3 content text-justify">
          {!! $article->content !!}
        </p>
      </div>
    </div>
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