<div id="secondary" class="widget-area " role="complementary">
    <aside class="widget woocommerce widget_product_categories"><span class="widget-title ">
            <span>{{trans('label.products')}}</span>
        </span>
        <div class="is-divider small"></div>
        @if(isset($productCategories->children) && count($productCategories->children) > 0)
            <ul class="product-categories">
                @foreach($productCategories->children as $cate)
                    <li class="cat-item cat-parent @if($cate->currentCate()) current-cat @endif @if($cate->isActiveCate()) active @endif ">
                        <a href="{{$cate->linkProduct()}}">{{ $cate->renderNameHtml()  }}</a>
                        @if($cate->children)
                            <ul class="children">
                                @foreach($cate->children as $subCate)
                                    <li id="" class="cat-item  @if($subCate->currentCate()) current-cat @endif @if($subCate->isActiveCate()) active @endif">
                                        <a href="{{$subCate->linkProduct()}}">{{  $subCate->renderNameHtml()  }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                    </li>
                @endforeach
            </ul>
        @endif
    </aside>
    <aside class="widget flatsome_recent_posts">
        <span class="widget-title ">
            <span>{{trans('label.new_solution')}}</span>
        </span>
        <div class="is-divider small"></div>
        <ul>
            @foreach($solutions as $solution)
                <li class="recent-blog-posts-li">
                    <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                        <div class="flex-col mr-half">
                            <div class="badge post-date  badge-circle">
                                <div class="badge-inner bg-fill"
                                     style="background: url('{{$solution->showImage()}}'); border:0;">
                                </div>
                            </div>
                        </div>
                        <div class="flex-col flex-grow">
                            <a href="{{$solution->solutionDetailLink()}}"
                               title="{{$solution->renderTitle()}}">
                               {{$solution->renderTitle()}}
                            </a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </aside>
</div>
