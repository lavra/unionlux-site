<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\App;

class ProductController extends Controller
{
    private $view;
    private $category;
    private $filesPath;
    private $configStore;
    
    public function __construct(Category $category)
    {
        $this->view = 'products';
        $this->category = $category;
        $this->filesPath = 'http://painel.unionlux.com.br';
        if (App::environment('local')) {
            $this->filesPath = 'http://127.0.0.1:8001/storage';
        }
        $date = date('Y');
        $this->configStore = [
            'filesPath' => $this->filesPath,
            'year' => ($date > 2020) ? '2020/'.$date : $date,
            'page' => 'category',     #video viemo (1,0)
            'video' => 0,             #video viemo (1,0)
            'sound' => 0,             #sound cloud (1,0)
            'posts' => 0,             #post (1,0)
            'photos' => 1,            #qtd de fotos da loja (1 >= 2,
            'youtube' => 0,           #video youtube (1,0)
            'profile' => 1,           #profile (1,0)
            'relateds' => 1,          #relateds (1,0)
            'categories' => 0,        #categories (1,0)
            'advertisement' => 0,     #advertisement (1,0)
            'maps' => [
                'map' => 1,           #map (1,0)
                'iframe' => 0,        #iframe (1,0)
            ],
            'socialLinks' => [
                'facebook' => 1,      #facebook (1,0)
                'instagram' => 1,     #instagram (1,0)
                'twitter' => 1,       #twitter (1,0)
                'whatsapp' => 1       #whatsapp (1,0)
            ]
        ];
    }
    
    public function category($slug)
    {
        //Products mains
        $category = $this->category->where(['slug' => $slug, 'active' => 1])->first();
        $products = $category->products;
        //Outers Products sidebar
        $random = $this->category->where('slug','!=',$slug)->whereActive(1)->inRandomOrder()->get();
        foreach ($random as $item) {
            $outers = $item->products()->take(5)->get();
        }
        
        //Menu Categories
        $categories = $this->category->whereActive(1)->get();
    
        $configStore = $this->typeJson($this->configStore);
        return view("{$this->view}.product-1", [
            'outers' => $outers,
            'category' => $category,
            'categories' => $categories,
            'products' => $products,
            'configStore' => $configStore
        ]);
    }
    
    /**
     * Retorna um Object
     * @param $array
     * @return mixed
     */
    function typeJson($array)
    {
        return json_decode(json_encode($array, FALSE));
    }
    
}
