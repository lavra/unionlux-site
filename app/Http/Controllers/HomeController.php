<?php

namespace App\Http\Controllers;

use App\User;
use App\Slider;
use App\Category;
use App\Services\ConfigService;

use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    private $users;
    private $slider;
    private $service;
    private $category;
    private $filesPath;
    private $configStore;
    
    public function __construct(
        User $users,
        Slider $slider,
        Category $category,
        ConfigService $service)
    {
        $this->users = $users;
        $this->slider = $slider;
        $this->service = $service;
        $this->category = $category;
        $this->filesPath = 'http://painel.unionlux.com.br';
        if (App::environment('local')) {
            $this->filesPath = 'http://127.0.0.1:8001/storage';
        }
        $date = date('Y');
        $this->configStore = [
            'filesPath' => $this->filesPath,
            'year' => ($date > 2020) ? '2020/'.$date : $date,
            'page' => 'home7',        #video viemo (1,0)
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
            ],
            
        ];
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent = new \Jenssegers\Agent\Agent;
        ($agent->isMobile() == true ? $sub = 'api' : $sub = 'web');
        
        $slider = $this->slider->wherePage('home')->first();
        $categories = $this->category->OrderBy('order')->whereActive(1)->get();
        $configCompany = $this->service->getCompanyData();
        $configStore = $this->typeJson($this->configStore);
        $users = $this->users->where(['whatsapp' => 1, 'active' => 1])->get();
    
        return view('home.index', [
                'sub' => $sub,
                'users' => $users,
                'slider' => $slider,
                'categories' => $categories,
                'configStore' => $configStore,
                'configCompany' => $configCompany,
            ]
        );
    
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
