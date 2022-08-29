<?php

namespace App\Jobs;
use RuntimeException;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

use vendor\Automattic\WooCommerce\Client;
use Automattic\WooCommerce\HttpClient\HttpClientException;

class MakeApiRequest implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $validatedData;
    public function __construct()
    {
       // $this->validatedData = $validatedData;
    }

    public function handle()
    {
      
     /*   $woocommerce = new Client(
          'https://woocommerce.kodeia.com',
          'ck_e6415ebb42b985a9985b5f99b5fddcbfbffda72a',
          'cs_4414f67bcf3dcf8d2dfc1cd7a0c1117010211d88',
          [
            'version' => 'wc/v3',
          ]
        );
      */
     
      
        $response = json_decode(Http::get('https://api.storerestapi.com/products'));
        //$i= 0;
        foreach ($response->data as $item)
        {
                $name= $item->title;
                $price=$item->price;
                $des=$item->description;
                $produts =new Product;
                $produts->name=$name;
                $produts->price=$price;
                $produts->description="des";
                $result=$produts->save();

               /* if($result)
                {
                    return ['Result'=>'item was saved'];
                }
                else
                {
                    return ['Result'=>'item was not saved'];
                }*/

                //$i++;
               //if($i == 10) break;

        }
   /* if ($response->failed()) 
        {
             now()->addSeconds(5 * $this->attempts());
              throw new RuntimeException("Failed to connect ", $response->status());
        }    /**/
     }

}
