<header id="header" class="header transparent has-transparent has-sticky sticky-shrink">
    <div class="header-wrapper">
        <div id="top-bar" class="header-top hide-for-sticky hide-for-medium">
            <div class="flex-row container">
                <div class="flex-col hide-for-medium flex-left">
                    <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                        <li class="header-contact-wrapper">
                            <ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">

                                <li class="">
                                    <a href="mailto:{{business()->getInfo('email')}}" class="tooltip" title="{{business()->getInfo('email')}}">
                                        <i class="icon-envelop" style="font-size:16px;"></i> <span>{{business()->getInfo('email')}}</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="tel:{{business()->getInfo('tel')}}" class="tooltip" title="{{business()->getInfo('tel')}}">
                                        <i class="icon-phone" style="font-size:16px;"></i> <span>{{business()->getInfo('tel')}}</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="flex-col hide-for-medium flex-center">
                    <ul class="nav nav-center nav-small  nav-divided">
                    </ul>
                </div>

                <div class="flex-col hide-for-medium flex-right">
                    <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
                        <li id="menu-item-7330-en" class="lang-item lang-item-360 lang-item-en lang-item-first menu-item menu-item-type-custom menu-item-object-custom menu-item-7330-en menu-item-design-default">
                            @if(App::getLocale() == 'vi')
                                <a href="{{route(request()->route()->getName(), ['lang' => 'en'])}}" hreflang="en-GB" lang="en-GB" class="nav-top-link">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAt1BMVEWSmb66z+18msdig8La3u+tYX9IaLc7W7BagbmcUW+kqMr/q6n+//+hsNv/lIr/jIGMnNLJyOP9/fyQttT/wb3/////aWn+YWF5kNT0oqz0i4ueqtIZNJjhvt/8gn//WVr/6+rN1+o9RKZwgcMPJpX/VFT9UEn+RUX8Ozv2Ly+FGzdYZrfU1e/8LS/lQkG/mbVUX60AE231hHtcdMb0mp3qYFTFwNu3w9prcqSURGNDaaIUMX5FNW5wYt7AAAAAjklEQVR4AR3HNUJEMQCGwf+L8RR36ajR+1+CEuvRdd8kK9MNAiRQNgJmVDAt1yM6kSzYVJUsPNssAk5N7ZFKjVNFAY4co6TAOI+kyQm+LFUEBEKKzuWUNB7rSH/rSnvOulOGk+QlXTBqMIrfYX4tSe2nP3iRa/KNK7uTmWJ5a9+erZ3d+18od4ytiZdvZyuKWy8o3UpTVAAAAABJRU5ErkJggg==" alt="English" width="16" height="11" style="width: 16px; height: 11px;">
                                    <span style="margin-left:0.3em;">English</span>
                                </a>
                            @else
                                <a href="{{route(request()->route()->getName(), ['lang' => 'vi'])}}" hreflang="vi" lang="vi" class="nav-top-link">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAATlBMVEX+AAD2AADvAQH/eXn+cXL9amr8YmL9Wlr8UlL7TkvoAAD8d0f6Pz/3ODf2Ly/0KSf6R0f6wTv60T31IBz6+jr4+Cv3QybzEhL4bizhAADgATv8AAAAW0lEQVR4AQXBgU3DQBRAMb+7jwKVUPefkQEQTYJqByBENpKUGoZslXoN5LPONH8G9WWZ7pGlOn6XZmaGRce1J/seei4dl+7dPWDqkk7+58e3+igdlySPcYbwBG+lPhCjrtt9EgAAAABJRU5ErkJggg==" alt="Tiếng Việt" width="16" height="11" style="width: 16px; height: 11px;">
                                    <span style="margin-left:0.3em;">Tiếng Việt</span>
                                </a>
                            @endif

                        </li>
                    </ul>
                </div>


            </div>
        </div>
        <div id="masthead" class="header-main nav-dark toggle-nav-dark">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <!-- Header logo -->
                    <a href="{{route('home')}}" title="{{config('core.app_name')}}" rel="home">
                        <img width="1" height="1" src="/images/logo_iotsmart.png" class="header_logo header-logo" alt="TechViet">
                        <img width="1" height="1" src="/images/logo_iotsmart.png" class="header-logo-dark" alt="TechViet"></a>
                </div>

                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                        <li class="header-search header-search-lightbox has-icon">
                            <a href="#search-lightbox" aria-label="Tìm kiếm" data-open="#search-lightbox"
                               data-focus="input.search-field" class="is-small">
                                <i class="icon-search" style="font-size:16px;"></i></a>

                            <div id="search-lightbox" class="mfp-hide dark text-center">
                                <div class="searchform-wrapper ux-search-box relative form-flat is-large">
                                    <form role="search" method="get" class="searchform"
                                          action="#">
                                        <div class="flex-row relative">
                                            <div class="flex-col flex-grow">
                                                <label class="screen-reader-text"
                                                       for="woocommerce-product-search-field-0">Tìm kiếm:</label>
                                                <input type="search" id="woocommerce-product-search-field-0"
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

                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left flex-grow">
                    <ul class="header-nav header-nav-main nav nav-left  nav-size-large nav-spacing-xlarge">
                    </ul>
                </div>

                <x-category :showCateDesktop="true"></x-category>
                <!-- Mobile Right Elements -->
                <div class="flex-col show-for-medium flex-right">
                    <ul class="mobile-nav nav nav-right ">
                        <li class="nav-icon has-icon">
                            <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay"
                               data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu"
                               aria-expanded="false">

                                <i class="icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="container">
                <div class="top-divider full-width"></div>
            </div>
        </div>
        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
            <div class="shade shade-top hide-for-sticky fill"></div>
        </div>
    </div>
</header>
