<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use VK\Client\VKApiClient;

class ShopController extends Controller
{

    public function index()
    {
        return view('shop/index');
    }

    public function land()
    {
        return view('shop/land');
    }

    public function small()
    {
        return view('shop/small');
    }

    public function small_single_product()
    {
        return view('shop/small_single_product');
    }

    public function cart()
    {
        return view('shop/cart');
    }

    public  function  test()
    {
        $access_token = '128a04037b775f25a71febadff69a3fc4885393b87799f1f806068f69f2cd6f9f5b9411dd7be399bb5af5';
        $vk = new VKApiClient();
        $response = $vk->photos()->get($access_token, array(
           // 'extended' => 1,
            'owner_id' => array(-209379755),
           'count' => 50,
           'offset'=> 0,
           'album_id' => 'wall',
           // 'fields' => array('city', 'photo','contacts'),


        ));
       //dd($response);

        $out = $response['items'];

       // dd($out);
        foreach ($out['sizes'] as $item)
        {
          //echo $item['url'];
          //  dd($item);
        }
    }



}
