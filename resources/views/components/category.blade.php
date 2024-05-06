@if($showCateMobile)
    <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide mobile-sidebar-slide mobile-sidebar-levels-1" data-levels="1">
        <div class="sidebar-menu no-scrollbar ">
            <ul class="nav nav-sidebar nav-vertical nav-uppercase nav-slide" data-tab="1">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-60 current_page_item">
                    <a href="{{route('home')}}" aria-current="page">{{trans("label.home")}}</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="{{route('about-us')}}">{{trans("label.about_us")}}</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                    <a href="{{route('product')}}">{{trans("label.products")}}</a>
                    @if(isset($productCategories->children) && count($productCategories->children) > 0)
                        <ul class="sub-menu nav-sidebar-ul children">
                            @foreach($productCategories->children as $cate)
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children">
                                    <a href="{{$cate->linkDetail()}}">{{$cate->renderNameHtml()}}</a>
                                    @if($cate->children)
                                        <ul class="sub-menu nav-sidebar-ul">
                                            @foreach($cate->children as $subCate)
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat">
                                                    <a href="{{$subCate->linkDetail()}}">{{$subCate->renderNameHtml()}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                    <a href="{{route('service')}}">{{trans("label.service")}}</a>
                    @if(isset($serviceCategories->children) && count($serviceCategories->children) > 0)
                        <ul class="sub-menu nav-sidebar-ul children">

                            @foreach($serviceCategories->children as $cate)
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{$cate->linkDetail()}}">{{ $cate->renderNameHtml() }}</a>
                                    @if($cate->children)
                                        <ul class="sub-menu nav-sidebar-ul">
                                            @foreach($cate->children as $subCate)
                                                <li id="" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat">
                                                    <a href="{{$subCate->linkDetail()}}">{{ $subCate->renderNameHtml() }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                    <a href="{{route('solution')}}">{{trans("label.solution")}}</a>
                    @if(isset($solutionCategories->children) && count($solutionCategories->children) > 0)
                        <ul class="sub-menu nav-sidebar-ul children">
                            @foreach($solutionCategories->children as $cate)
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="{{$cate->linkDetail()}}">{{  $cate->renderNameHtml() }}</a>
                                    @if($cate->children)
                                        <ul class="sub-menu nav-sidebar-ul">
                                            @foreach($cate->children as $subCate)
                                                <li id="" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                    <a href="{{$subCate->linkDetail()}}">{{ $subCate->renderNameHtml() }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif

                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>

                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="{{route('projects')}}">{{trans("label.projects")}}</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="{{route('customers')}}">{{trans("label.customers")}}</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="{{route('contact')}}">{{trans("label.contact")}}</a>
                </li>
                @if(App::getLocale() == 'vi')
                    <li class="lang-item lang-item-360 lang-item-en lang-item-first menu-item menu-item-type-custom menu-item-object-custom">
                        <a href="{{route(request()->route()->getName(), ['lang' => 'en'])}}" hreflang="en-GB" lang="en-GB"><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAt1BMVEWSmb66z+18msdig8La3u+tYX9IaLc7W7BagbmcUW+kqMr/q6n+//+hsNv/lIr/jIGMnNLJyOP9/fyQttT/wb3/////aWn+YWF5kNT0oqz0i4ueqtIZNJjhvt/8gn//WVr/6+rN1+o9RKZwgcMPJpX/VFT9UEn+RUX8Ozv2Ly+FGzdYZrfU1e/8LS/lQkG/mbVUX60AE231hHtcdMb0mp3qYFTFwNu3w9prcqSURGNDaaIUMX5FNW5wYt7AAAAAjklEQVR4AR3HNUJEMQCGwf+L8RR36ajR+1+CEuvRdd8kK9MNAiRQNgJmVDAt1yM6kSzYVJUsPNssAk5N7ZFKjVNFAY4co6TAOI+kyQm+LFUEBEKKzuWUNB7rSH/rSnvOulOGk+QlXTBqMIrfYX4tSe2nP3iRa/KNK7uTmWJ5a9+erZ3d+18od4ytiZdvZyuKWy8o3UpTVAAAAABJRU5ErkJggg=="
                                alt="English" width="16" height="11" style="width: 16px; height: 11px;">
                            <span style="margin-left:0.3em;">English</span>
                        </a>
                    </li>
                @else
                    <li class="lang-item lang-item-360 lang-item-en lang-item-first menu-item menu-item-type-custom menu-item-object-custom">
                        <a href="{{route(request()->route()->getName(), ['lang' => 'vi'])}}" hreflang="vi" lang="vi"><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAATlBMVEX+AAD2AADvAQH/eXn+cXL9amr8YmL9Wlr8UlL7TkvoAAD8d0f6Pz/3ODf2Ly/0KSf6R0f6wTv60T31IBz6+jr4+Cv3QybzEhL4bizhAADgATv8AAAAW0lEQVR4AQXBgU3DQBRAMb+7jwKVUPefkQEQTYJqByBENpKUGoZslXoN5LPONH8G9WWZ7pGlOn6XZmaGRce1J/seei4dl+7dPWDqkk7+58e3+igdlySPcYbwBG+lPhCjrtt9EgAAAABJRU5ErkJggg=="
                                alt="Tiếng Việt" width="16" height="11" style="width: 16px; height: 11px;">
                            <span style="margin-left:0.3em;">Tiếng Việt</span>
                        </a>
                    </li>
                @endif

                <li class="header-contact-wrapper">
                    <ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">
                        <li class="">
                            <a href="mailto:{{business()->getInfo('email')}}" class="tooltip" title="{{business()->getInfo('email')}}">
                                <i class="icon-envelop" style="font-size:16px;"></i>
                                <span> {{business()->getInfo('email')}}	</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="tel:{{business()->getInfo('tel')}}" class="tooltip" title="{{business()->getInfo('tel')}}">
                                <i class="icon-phone" style="font-size:16px;"></i>
                                <span>{{business()->getInfo('tel')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="html header-social-icons ml-0">
                    <div class="social-icons follow-icons">
                        <a href="#" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon plain facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook">
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="#" target="_blank" rel="noopener noreferrer nofollow" data-label="TikTok" class="icon plain tiktok tooltip" title="Follow on TikTok" aria-label="Follow on TikTok">
                            <i class="icon-tiktok"></i>
                        </a>
                        <a href="#" target="_blank" rel="noopener noreferrer nofollow" data-label="YouTube" class="icon plain  youtube tooltip" title="Follow on YouTube" aria-label="Follow on YouTube">
                            <i class="icon-youtube"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endif

@if($showCateDesktop)
    <div class="flex-col hide-for-medium flex-right">
        <ul class="header-nav header-nav-main nav nav-right  nav-size-large nav-spacing-xlarge">
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-60 current_page_item menu-item-design-default @if(request()->routeIs(['home'])) active @endif">
                <a href="{{route('home')}}" aria-current="page" class="nav-top-link"> {{trans("label.home")}} </a>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-design-default @if(request()->routeIs('about-us')) active @endif">
                <a href="{{route('about-us')}}" class="nav-top-link">{{trans("label.about_us")}}</a>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-design-default has-dropdown">
                <a href="{{route('product')}}" class="nav-top-link">{{trans("label.products")}} <i class="icon-angle-down"></i></a>
                @if(isset($productCategories->children) && count($productCategories->children) > 0)
                    <ul class="sub-menu nav-dropdown nav-dropdown-simple">
                        @foreach($productCategories->children as $cate)
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children nav-dropdown-col">

                                <a href="{{$cate->linkDetail()}}">{{  $cate->renderNameHtml() }}</a>
                                @if($cate->children)
                                    <ul class="sub-menu nav-column nav-dropdown-simple">
                                        @foreach($cate->children as $subCate)
                                            <li id="" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat">
                                                <a href="{{$cate->linkDetail()}}">{{ $cate->renderNameHtml() }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif

                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-design-default has-dropdown">
                <a href="{{route('service')}}" class="nav-top-link">{{trans("label.service")}} <i class="icon-angle-down"></i></a>
                @if(isset($serviceCategories->children) && count($serviceCategories->children) > 0)
                    <ul class="sub-menu nav-dropdown nav-dropdown-simple">

                        @foreach($serviceCategories->children as $cate)
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children nav-dropdown-col">
                                <a href="{{$cate->linkDetail()}}">{{ $cate->renderNameHtml() }}</a>
                                @if($cate->children)
                                    <ul class="sub-menu nav-column nav-dropdown-simple">
                                        @foreach($cate->children as $subCate)
                                            <li id="" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat">
                                                <a href="{{$cate->linkDetail()}}">{{ $cate->renderNameHtml() }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif

                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-design-default has-dropdown">
                <a href="{{route('solution')}}" class="nav-top-link">{{trans("label.solution")}} <i class="icon-angle-down"></i></a>
                @if(isset($solutionCategories->children) && count($solutionCategories->children) > 0)
                    <ul class="sub-menu nav-dropdown nav-dropdown-simple">
                        @foreach($solutionCategories->children as $cate)
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children nav-dropdown-col">
                                <a href="{{$cate->linkDetail()}}">{{  $cate->renderNameHtml()  }}</a>
                                @if($cate->children)
                                    <ul class="sub-menu nav-column nav-dropdown-simple">
                                        @foreach($cate->children as $subCate)
                                            <li id="" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat">
                                                <a href="{{$subCate->linkDetail()}}">{{ $subCate->renderNameHtml() }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif

                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-design-default">
                <a href="{{route('projects')}}" class="nav-top-link">{{trans("label.projects")}}</a>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-design-default">
                <a href="{{route('customers')}}" class="nav-top-link">{{trans("label.customers")}}</a>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-design-default">
                <a href="{{route('contact')}}" class="nav-top-link">{{trans("label.contact")}}</a>
            </li>
            <li class="header-search header-search-lightbox has-icon">
                <a href="#search-lightbox" aria-label="Tìm kiếm" data-open="#search-lightbox"
                   data-focus="input.search-field" class="is-small">
                    <i class="icon-search" style="font-size:16px;"></i></a>

                <div id="search-lightbox" class="mfp-hide dark text-center">
                    <div class="searchform-wrapper ux-search-box relative form-flat is-large">
                        <form role="search" method="get" class="searchform"
                              action="https://techviet.com.vn/">
                            <div class="flex-row relative">
                                <div class="flex-col flex-grow">
                                    <label class="screen-reader-text"
                                           for="woocommerce-product-search-field-1">Tìm kiếm:</label>
                                    <input type="search" id="woocommerce-product-search-field-1"
                                           class="search-field mb-0" placeholder="Tìm kiếm..." value=""
                                           name="s">
                                    <input type="hidden" name="post_type" value="product">
                                    <input type="hidden" name="lang" value="vi">
                                </div>
                                <div class="flex-col">
                                    <button type="submit" value="Tìm kiếm"
                                            class="ux-search-submit submit-button secondary button icon mb-0"
                                            aria-label="Submit">
                                        <i class="icon-search"></i></button>
                                </div>
                            </div>
                            <div class="live-search-results text-left z-top"></div>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@endif


