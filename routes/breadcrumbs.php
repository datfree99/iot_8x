<?php
use Diglactic\Breadcrumbs\Breadcrumbs;

use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('admin.dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});

Breadcrumbs::for('admin.category.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Categories', route('admin.category.index'));
});

Breadcrumbs::for('admin.product.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Sản phẩm', route('admin.product.index'));
});

Breadcrumbs::for('admin.product.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.product.index');
    $trail->push('Tạo mới sản phẩm', route('admin.product.create'));
});

Breadcrumbs::for('admin.product.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.product.index');
    $trail->push('Cập nhật sản phẩm');
});

Breadcrumbs::for('admin.about-us', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Về chúng tôi');
});

Breadcrumbs::for('admin.slider.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Slider', route('admin.slider.index'));
});

Breadcrumbs::for('admin.slider.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.slider.index');
    $trail->push('Thêm mới slider');
});

Breadcrumbs::for('admin.slider.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.slider.index');
    $trail->push('Cập nhật slider');
});

Breadcrumbs::for('admin.post.index', function (BreadcrumbTrail $trail){
    $trail->parent('admin.dashboard');
    $trail->push('Bài viết', route('admin.post.index'));
});

Breadcrumbs::for('admin.post.create', function (BreadcrumbTrail $trail){
    $trail->parent('admin.dashboard');
    $trail->push('Thêm mới bài viết');
});

Breadcrumbs::for('admin.post.edit', function (BreadcrumbTrail $trail){
    $trail->parent('admin.dashboard');
    $trail->push('Cập nhật bài viết');
});
