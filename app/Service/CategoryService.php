<?php

namespace App\Service;

class CategoryService
{


    public function activeCategory($route)
    {
       return request()->routeIs($route);
    }


}
