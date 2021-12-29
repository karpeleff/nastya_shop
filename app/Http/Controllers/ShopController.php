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

    public function get_order()
    {
return view('shop/order_confirm');
    }


    public  function  test()
    {
       $res = $this->parser();
        dd($res);
        return view('shop/test',['res'=> $res]);
        //$res = $this->get_file();
      //  $res = $this->get_photos('202031912');
       // $res = $this->get_notes_wall('202031912');
        //dd($res);

    }

    public function get_photos($pbl_id)
    {
        $access_token = '128a04037b775f25a71febadff69a3fc4885393b87799f1f806068f69f2cd6f9f5b9411dd7be399bb5af5';
        $vk = new VKApiClient();
        $response = $vk->photos()->get($access_token, array(
             'extended' => 1,
            'owner_id' => array('-'.$pbl_id),
            'rev' => 1,
            'count' => 50,
            'offset'=> 0,
            'album_id' => 'wall',
            // 'fields' => array('city', 'photo','contacts'),

        ));

         $result = json_encode($response);
         $date = date("d.m.y");
         $file = 'photo/photo_'.$pbl_id.'_'.$date . '.json';
         $current = fopen($file, "a");
         fwrite($current, $result);// сохраняем в файл  202031912
         fclose($current);





    }

    public function get_notes_wall($pbl_id)
    {
        $access_token = '128a04037b775f25a71febadff69a3fc4885393b87799f1f806068f69f2cd6f9f5b9411dd7be399bb5af5';
        $vk = new VKApiClient();
        $response = $vk->wall()->get($access_token, array(
            'extended' => 1,
            'owner_id' => array('-' . $pbl_id),
            'count' => 50,
            'rev' => 1,
            'offset' => 0,
            'filter' => 'owner',
            // 'album_id' => 'wall',
            'fields' => array('city', 'photo', 'contacts'),

        ));

        $result = json_encode($response);
        $date = date("d.m.y");
        $file = 'wall/wall_text_'.$pbl_id.'_'.$date . '.json';
        $current = fopen($file, "a");
        fwrite($current, $result);// сохраняем в файл  202031912
        fclose($current);

    }
    function  parser($pbl_id)
    {
       $date =  date("d.m.y");

        $file = 'photo/photo_'.$pbl_id.'_'.$date . '.json';

        $out =  file_get_contents($file);
       // dd($out);

        $data = (json_decode($out,true));

        //$arr = $data['items'];

        //dd($data['items']);
        $link = [];
        $i = 0;

  foreach($data['items'] as $item)
  {
    //dd($item);
      //
      // echo $item['attachments'][0]['photo']['sizes'][1]['url'];
     // $link[$i] = $item['sizes'][7]['url'];
     // $link[$i]  = ['url'=>  $item['sizes'][7]['url'],'text' => $item['text']];
       $link[$i]  = ['date'=>  $item['date'],'url' => $item['sizes'][7]['url']];
      $i++;

  }
       return  $link;
       //dd($link);

    }

    public   function get_file()
    {
        $res =  $this->get_photos('202031912');

       $result = json_encode($res);

        $date =  date("d.m.y");
        $file =     $date.'.json';
        $current = fopen($file, "a");
        fwrite($current, $result);// сохраняем в файл  202031912
        fclose($current);
    }





}
