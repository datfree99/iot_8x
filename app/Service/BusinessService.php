<?php

namespace App\Service;

use App\Models\CategoryModel;
use Illuminate\Contracts\Foundation\Application;
class BusinessService
{
    private $locale;
    private $app;
    public function __construct(Application $app)
    {
        $this->app = $app;

        $this->locale = $this->app->getLocale();
        $localSupport = config('core.local_support');
        if (!in_array($this->locale, $localSupport)) {
            $this->locale = $localSupport['vi'];
        }

    }

    public function information(): array
    {
        $info = config('core.business_information');

        return [
            'address' =>  $info['address_'. $this->locale],
            'name' =>  $info['name_'. $this->locale],
            'tel' => $info['tel'],
            'email' => $info['email']
        ];
    }

    public function getInfo($key)
    {
        $info = $this->information();

        return $info[$key] ?? '';
    }

    public function social($key = null)
    {
        $socials = config('core.socials');
        if (empty($key)) {
            return $socials;
        }
        return $socials[$key] ?? "";
    }

}
