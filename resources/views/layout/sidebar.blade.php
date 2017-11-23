<div class="col-md-4">
                <aside class="right-sidebar">
                    @include('layout.search')
                    <div class="widget">
                        <div class="widget-heading">
                            <h4>Categories</h4>
                        </div>
                        <div class="widget-body">
                        @if(count($categories) > 0)
                            <ul class="categories">
                            @foreach($categories as $category)
                                <li>
                                    <a href="#">{{ $category['name'] }}</a>
                                    <span class="badge pull-right">{{ $category['number'] }}</span>
                                </li>
                            @endforeach
                            </ul>
                        @elseif(count($categories) <= 0)
                            <h5>目前沒有分類項目喔</h5>
                        @endif
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-heading">
                            <h4>Popular Posts</h4>
                        </div>
                        <div class="widget-body">
                            <ul class="popular-posts">
                            @foreach($popular_posts as $popular_post)
                                <li>
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="{{ $popular_post['img'] }}" />
                                        </a>
                                    </div>
                                    <div class="post-body">
                                        <h6><a href="#">{{ $popular_post['title'] }}</a></h6>
                                        <div class="post-meta">
                                            <span>{{ $popular_post['time_ago'] }} minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-heading">
                            <h4>Tags</h4>
                        </div>
                        <div class="widget-body">
                            <ul class="tags">
                            @foreach($tags as $tag)
                                <li><a href="#">{{ $tag['title'] }}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>