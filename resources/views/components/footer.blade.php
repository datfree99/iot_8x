<footer id="footer" class="footer-wrapper">
    <div class="footer-widgets footer footer-2 dark">
        <div class="row dark large-columns-4 mb-0">
            <div id="text-9" class="col pb-0 widget widget_text">
                <div class="textwidget">
                    <p>
                        <img loading="lazy" class="alignnone size-medium" src="/images/logo_iotsmart.png" alt="Iot smart" width="300px" height="auto">
                    </p>
                </div>
            </div>
            <div id="text-5" class="col pb-0 widget widget_text">
                <span class="widget-title">{{business()->getInfo('name')}}</span>
                <div class="is-divider small"></div>
                <div class="textwidget">
                    <ul>
                        <li><strong>{{trans("label.address")}}:</strong> {{business()->getInfo('address')}} </li>
                        <li><strong>{{trans("label.tel")}}: </strong><a href="tel:{{business()->getInfo('tel')}}" rel="nofollow" target="_blank">{{business()->getInfo('tel')}}</a><strong><br></strong></li>
                        <li><strong>{{trans("label.email")}}:</strong> <a href="mailto:{{business()->getInfo('email')}}">{{business()->getInfo('email')}}</a></li>
                    </ul>

                    <div class="social-icons follow-icons">
                        <a href="#" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon primary button circle facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook"><i class="icon-facebook"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer nofollow" data-label="TikTok" class="icon primary button circle tiktok tooltip" title="Follow on TikTok" aria-label="Follow on TikTok"><i class="icon-tiktok"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer nofollow" data-label="YouTube" class="icon primary button circle youtube tooltip tooltipstered" aria-label="Follow on YouTube"><i class="icon-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div id="nav_menu-5" class="col pb-0 widget widget_nav_menu"><span class="widget-title">{{trans("label.service")}}</span>
                <div class="is-divider small"></div>
                <div class="menu-dich-vu-container">
                    @if(business()->getCategoryParentService())
                        <ul id="menu-dich-vu" class="menu">
                            @foreach(business()->getCategoryParentService() as $category)
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{$category->linkDetail()}}">{{$category->renderNameHtml()}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                </div>
            </div>
            <div class="col pb-0 widget widget_nav_menu"><span class="widget-title">{{trans("label.about_us")}}</span>
                <div class="is-divider small"></div>
                <div class="menu-ve-chung-toi-container">
                    <ul id="menu-ve-chung-toi" class="menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('about-us')}}">{{trans("label.about_us")}}</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="{{route('customers')}}">{{trans("label.customers")}}</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('contact')}}">{{trans("label.contact")}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute-footer dark medium-text-center text-center">
        <div class="container clearfix">
            <div class="footer-primary pull-left">
                <div class="copyright-footer">
                    Copyright 2024 © <strong>iotsmart.vn</strong>
                </div>
            </div>
        </div>
    </div>
    <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle" id="top-link" aria-label="Go to top">
        <i class="fa fa-chevron-up"></i>
    </a>

</footer>
