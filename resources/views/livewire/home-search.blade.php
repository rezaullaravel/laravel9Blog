<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">


                  @foreach ($posts as $post)

                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{asset($post->post_image)}}" alt="">
                    </div>
                    <div class="down-content">
                      <span>{{$post['categories']['category_name']}}</span>
                      <a href="javascript:void();"><h4>{{$post->post_title}}</h4></a>
                      <ul class="post-info">
                        <li><a href="#">{{$post['users']['name']}}</a></li>
                        <li><a href="#">{{$post->created_at->format('F j, Y')}}</a></li>
                        <li><a href="#">
                          @php
                              $comments=App\Models\Comment::where('post_id',$post->id)->get();
                          @endphp
                          {{count($comments)}} Comments
                          </a></li>
                      </ul>
                      <p>{!!Str::limit($post->post_description, 250);!!}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">

                          </div>
                          <div class="col-6">
                            <ul class="post-share">

                              <li><a href="{{route('post.single',$post->id)}}" class="readmore">ReadMore</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach



                <div class="col-lg-12">
                  {{$posts->links()}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
              <div class="sidebar">
                <div class="row">
                <form action="{{route('post.search')}}" method="GET" style="display: inherit;">
                  @csrf
                  <div class="col-lg-9">
                    <div class="sidebar-item search">

                        <input type="text"  class="searchText" style="width:325px;" placeholder="type to search..." required wire:model="post_title" >

                    </div>
                  </div>

                </form>






                @include('frontend.body.popular_posts')

               @include('frontend.body.categorywise_post')


               @include('frontend.body.tagwise_post')
              </div>{{--row--}}
            </div>{{--sidebar--}}
          </div>{{--col-lg-4--}}
    </div>
</div>
