<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "iotsmart.vn",
            'titleBefore'  => false,
            'description'  => 'Cung cấp các sản phẩm và dịch vụ tự động hóa hiện đại giúp các doanh nghiệp cải thiện hiệu quả, giảm chi phí và tăng năng suất',
            'separator'    => ' - ',
            'keywords'     => ['iot', 'iot smart', 'tự động hóa'],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'index/follow', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'IOT SMART - Giải pháp tự động hóa', // set false to total remove
            'description' => 'Cung cấp các sản phẩm và dịch vụ tự động hóa hiện đại giúp các doanh nghiệp cải thiện hiệu quả, giảm chi phí và tăng năng suất', // set false to total remove
            'url'         => 'http://iotsmart.vn', // Set null for using Url::current(), set false to total remove
            'type'        => 'website',
            'site_name'   => 'company',
            'images'      => [''],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'IOT SMART - Giải pháp tự động hóa', // set false to total remove
            'description' => 'Cung cấp các sản phẩm và dịch vụ tự động hóa hiện đại giúp các doanh nghiệp cải thiện hiệu quả, giảm chi phí và tăng năng suất', // set false to total remove
            'url'         => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
