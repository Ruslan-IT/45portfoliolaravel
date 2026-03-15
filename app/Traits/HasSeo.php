<?php

namespace App\Traits;


trait HasSeo{


    public function getSeo(){

        return [
            'title' => $this->seo_title,
            'description' => $this->seo_description,
            'keywords' => $this->seo_kewords

        ];

    }


}
