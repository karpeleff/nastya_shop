<?php

namespace App\Http\Controllers;


use App\Models\Note;
use Illuminate\Http\Request;
use VK\Client\VKApiClient;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{

    public function index()
    {
        $link = $this->parser('202031912');

        return view('shop/index',['link'=>$link]);
    }


    public function Shop($id)
    {
        $link = $this->parser($id);

        return view('shop/index',['link'=>$link]);
    }

    public function land()
    {
        return view('shop/land');
    }
    public function Notes($id = 0)
    {

        return view('shop/new_note');
    }
    public function small()
    {
        return view('shop/small');
    }

    public function  Note_add(Request $request)
    {

        $path = $request->file('file')->store('public');

       // $file = $request->file('file');
       // $img = time() . '_' . $file->getClientOriginalName();

      // $file->move(storage_path('/advert'),$img) ;

        $note = new Note();
        $note->name = $request->input('name');
        $note->tel = $request->input('tel');
        $note->category = $request->input('category');
        $note->img =   $path;          //$request->input('');
        $note->text = $request->input('text');
        $note->price = $request->input('price');
        $note->save();

        $data =  Note::all();

                return view('shop/new_note',['data' => $data]);


    }

    public function order_product(Request  $request)
    {
          dd($request->input());


        return view('shop/order_product');
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
        // $this->get_info('202031912','1640323049');
        $this->GetMarket();

     //  $res = $this->parser();
       // dd($res);
       // return view('shop/test',['res'=> $res]);
        //$res = $this->get_file();
      //  $res = $this->get_photos('202031912');
       // $res = $this->get_notes_wall('202031912');
        //dd($res);

    }

    public function get_photos($pbl_id)
    {
        $access_token = '9939d093c3ee10d37325b8d77e4087ac15ac53bf7c96e6895e88cc5fc198773a5e488ea7cc538f6775209';
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

        if(file_exists($file))
        {
            unlink($file);
        }
         $current = fopen($file, "a");
         fwrite($current, $result);// сохраняем в файл  202031912
         fclose($current);
         return 'ok';





    }

    public function get_notes_wall($pbl_id)
    {
        //$access_token = '128a04037b775f25a71febadff69a3fc4885393b87799f1f806068f69f2cd6f9f5b9411dd7be399bb5af5';
        $access_token = '9abe00620e78b130ad4b09b542e5fd4b35a44a292cb8721e9141cf55739d011d24ae0b438a8c29a35bf41';
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

       // dd($data);

        //$arr = $data['items'];

       // /dd($data['items']);
        $link = [];
        $i = 0;

  foreach($data['items'] as $item)
  {
    //dd($item);
      //
      // echo $item['attachments'][0]['photo']['sizes'][1]['url'];
     // $link[$i] = $item['sizes'][7]['url'];
     // $link[$i]  = ['url'=>  $item['sizes'][7]['url'],'text' => $item['text']];
       $link[$i]  = ['date_mark'=>  $item['date'],'url' => $item['sizes'][7]['url'],'pbl_id' => $pbl_id];
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

        public function get_info($pbl_id,$date_mark)
        {
              $date =  date("d.m.y");

               $file = 'wall/wall_text_'.$pbl_id.'_'.$date . '.json';

               $out =  file_get_contents($file);
              // dd($out);

               $data = (json_decode($out,true));

               //$arr = $data['items'];

              // dd($data['items']);
               $result = [];
               $i = 0;

            foreach ($data['items'] as $item) {

              // echo $item['date'];
              // echo '<br>';

                if($item['date'] == $date_mark)
                {
                    echo  $item['text'];
                    echo '<br>';
                   $text = $this->remove_emoji($item['text']);

                    echo $text;

                }
            }



             // return  $res  507d0fc0507d0fc0507d0fc0d2500781b45507d507d0fc031bd92ce2ac483ab7d37c00c
        }

 public   function GetMarket($pbl_id)
 {
    // $access_token = '128a04037b775f25a71febadff69a3fc4885393b87799f1f806068f69f2cd6f9f5b9411dd7be399bb5af5';
     $access_token = '9939d093c3ee10d37325b8d77e4087ac15ac53bf7c96e6895e88cc5fc198773a5e488ea7cc538f6775209';
     $vk = new VKApiClient();
     $response = $vk->market()->get($access_token, array(
         'extended' => 1,
         'owner_id' => array('-' . $pbl_id),
        // 'rev' => 1,
       //  'count' => 10,
        'offset'=> 0,
        // 'album_id' => 'wall',
         // 'fields' => array('city', 'photo','contacts'),

     ));

    // dd($response);
     $result = json_encode($response);
     $date = date("d.m.y");
     $file = 'market/market_text_'.$pbl_id.'_'.$date . '.json';
     $current = fopen($file, "a");
     fwrite($current, $result);// сохраняем в файл  202031912    198253699
     fclose($current);
     return 'ok';
 }

    function  parser_market($pbl_id)
    {
        $date =  date("d.m.y");

        $file = 'market/market_text_'.$pbl_id.'_'.$date . '.json';

        $out =  file_get_contents($file);
        // dd($out);

        $data = (json_decode($out,true));

        //$arr = $data['items'];
        // dd($data);
        //dd($data['items']);
        $link = [];
        $i = 0;

        foreach($data['items'] as $item)
        {
            $link[$i]  = ['category'=>  $item['category']['name'],
                          'description' => $item['description'],
                          'url'     =>  $item['photos'][0]['sizes'][7]['url'],
            ];
            //dd($item);
            //
            // echo $item['attachments'][0]['photo']['sizes'][1]['url'];
            // $link[$i] = $item['sizes'][7]['url'];
            // $link[$i]  = ['url'=>  $item['sizes'][7]['url'],'text' => $item['text']];
           // $link[$i]  = ['date_mark'=>  $item['date'],'url' => $item['sizes'][7]['url'],'pbl_id' => $pbl_id];
            $i++;

        }
        return  $link;
        //dd($link);

    }




}
