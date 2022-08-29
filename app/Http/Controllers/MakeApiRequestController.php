<?php

namespace App\Http\Controllers;
use App\Jobs\MakeApiRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class MakeApiRequestController extends Controller
{
   

    public function store (Request $request) {



      $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:225',
                'body' => 'required',
            ]
        );

        if ($validator->fails()) {
            return $validator->errors()->all();
        }

        $validatedData = $validator->validated();

      MakeApiRequest::dispatch();

        return response()->json(['message' =>'item saved']);
    }



}
