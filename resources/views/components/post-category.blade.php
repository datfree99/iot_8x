<div id="secondary" class="widget-area " role="complementary">
    <aside class="widget woocommerce widget_product_categories"><span class="widget-title ">
            <span>{{trans('label.products')}}</span>
        </span>
        <div class="is-divider small"></div>
        @if(isset($productCategories->children) && count($productCategories->children) > 0)
            <ul class="product-categories">
                @foreach($productCategories->children as $cate)
                    <li class="cat-item cat-parent">
                        <a href="{{route('productDetail', ['slug' => $cate->slug])}}">{{  App::getLocale() == 'vi' ? $cate->name_vi : $cate->name_en  }}</a>
                        @if($cate->children)
                            <ul class="children">
                                @foreach($cate->children as $subCate)
                                    <li id="" class="cat-item">
                                        <a href="{{route('productDetail', ['slug' => $subCate->slug])}}">{{  App::getLocale() == 'vi' ? $subCate->name_vi : $subCate->name_en  }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                    </li>
                @endforeach
            </ul>
        @endif
    </aside>
    <aside id="flatsome_recent_posts-17" class="widget flatsome_recent_posts"><span class="widget-title "><span>BÀI VIẾT MỚI</span></span>
        <div class="is-divider small"></div>
        <ul>

            <li class="recent-blog-posts-li">
                <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                    <div class="flex-col mr-half">
                        <div class="badge post-date  badge-circle">
                            <div class="badge-inner bg-fill"
                                 style="background: url(images/img-techviet-8-280x280.jpg); border:0;">
                            </div>
                        </div>
                    </div>
                    <div class="flex-col flex-grow">
                        <a href="https://techviet.com.vn/phong-hop-thong-minh-dieu-khien-bang-giong-noi-khong-cham.html"
                           title="Phòng họp thông minh điều khiển bằng giọng nói, không chạm">Phòng họp thông minh điều
                            khiển bằng giọng nói, không chạm</a>
                        <span class="post_comments op-7 block is-xsmall"><span>Chức năng bình luận bị tắt<span
                                    class="screen-reader-text"> ở Phòng họp thông minh điều khiển bằng giọng nói, không chạm</span></span></span>
                    </div>
                </div>
            </li>


            <li class="recent-blog-posts-li">
                <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                    <div class="flex-col mr-half">
                        <div class="badge post-date  badge-circle">
                            <div class="badge-inner bg-fill"
                                 style="background: url(images/img-techviet-6-280x280.jpg); border:0;">
                            </div>
                        </div>
                    </div>
                    <div class="flex-col flex-grow">
                        <a href="https://techviet.com.vn/lua-chon-dac-diem-va-tinh-nang-loa-bosch-phat-nhac-nen-hoi-nghi.html"
                           title="Lựa chọn đặc điểm và tính năng Loa BOSCH phát nhạc nền, hội nghị">Lựa chọn đặc điểm và
                            tính năng Loa BOSCH phát nhạc nền, hội nghị</a>
                        <span class="post_comments op-7 block is-xsmall"><span>Chức năng bình luận bị tắt<span
                                    class="screen-reader-text"> ở Lựa chọn đặc điểm và tính năng Loa BOSCH phát nhạc nền, hội nghị</span></span></span>
                    </div>
                </div>
            </li>


            <li class="recent-blog-posts-li">
                <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                    <div class="flex-col mr-half">
                        <div class="badge post-date  badge-circle">
                            <div class="badge-inner bg-fill"
                                 style="background: url(images/img-techviet-5-280x280.jpg); border:0;">
                            </div>
                        </div>
                    </div>
                    <div class="flex-col flex-grow">
                        <a href="https://techviet.com.vn/luu-y-khi-lap-dat-he-thong-am-thanh-hoi-truong.html"
                           title="Lưu ý khi lắp đặt hệ thống âm thanh hội trường">Lưu ý khi lắp đặt hệ thống âm thanh
                            hội trường</a>
                        <span class="post_comments op-7 block is-xsmall"><span>Chức năng bình luận bị tắt<span
                                    class="screen-reader-text"> ở Lưu ý khi lắp đặt hệ thống âm thanh hội trường</span></span></span>
                    </div>
                </div>
            </li>


            <li class="recent-blog-posts-li">
                <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                    <div class="flex-col mr-half">
                        <div class="badge post-date  badge-circle">
                            <div class="badge-inner bg-fill"
                                 style="background: url(images/img-techviet-1-280x280.jpeg); border:0;">
                            </div>
                        </div>
                    </div>
                    <div class="flex-col flex-grow">
                        <a href="https://techviet.com.vn/top-3-giai-phap-hoc-truc-tuyen-hop-truc-tuyen-duoc-ung-dung-nhieu-nhat-hien-nay.html"
                           title="Top 3 giải pháp học trực tuyến, họp trực tuyến được ứng dụng nhiều nhất hiện nay">Top
                            3 giải pháp học trực tuyến, họp trực tuyến được ứng dụng nhiều nhất hiện nay</a>
                        <span class="post_comments op-7 block is-xsmall"><span>Chức năng bình luận bị tắt<span
                                    class="screen-reader-text"> ở Top 3 giải pháp học trực tuyến, họp trực tuyến được ứng dụng nhiều nhất hiện nay</span></span></span>
                    </div>
                </div>
            </li>


            <li class="recent-blog-posts-li">
                <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                    <div class="flex-col mr-half">
                        <div class="badge post-date  badge-circle">
                            <div class="badge-inner bg-fill"
                                 style="background: url(images/img-techviet-9-280x280.jpg); border:0;">
                            </div>
                        </div>
                    </div>
                    <div class="flex-col flex-grow">
                        <a href="https://techviet.com.vn/ket-noi-mat-gan-tuong-hdbt-truyen-thong-voi-giai-phap-av-over-ip.html"
                           title="Kết nối mặt gắn tường hdbt truyền thống với giải pháp AV-over-IP">Kết nối mặt gắn
                            tường hdbt truyền thống với giải pháp AV-over-IP</a>
                        <span class="post_comments op-7 block is-xsmall"><span>Chức năng bình luận bị tắt<span
                                    class="screen-reader-text"> ở Kết nối mặt gắn tường hdbt truyền thống với giải pháp AV-over-IP</span></span></span>
                    </div>
                </div>
            </li>
        </ul>
    </aside>
</div>
