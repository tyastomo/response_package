<?php
 
namespace Tyastomo\Response;

class SimpleResponse 
{
    protected static $responseCode = [
        101 => [
            "code"=>"001",
            "message"=>"Invalid Param",
        ],
        200 => [
            "code"=>"000",
            "message"=>"Success",
        ],
        201 => [
            "code"=>"000",
            "message"=>"Created",
        ],
        204 => [
            "code"=>"001",
            "message"=>"Data Not Found",
        ],
        400 => [
            "code"=>"001",
            "message"=>"Bad Request",
        ],
        401 => [
            "code"=>"002",
            "message"=>"Unauthorized",
        ],
        403 => [
            "code"=>"001",
            "message"=>"Unauthorized client id",
        ],
        404 => [
            "code"=>"001",
            "message"=>"Not Found",
        ],
        422 => [
            "code"=>"001",
            "message"=>"Invalid Data",
        ],
        405 => [
            "code"=>"001",
            "message"=>"Method Not Allowed",
        ],
        500 => [
            "code"=>"001",
            "message"=>"Internal Error",
        ],
    ];

    public static function successRes($httpCode = 200,$data, $message = null, $errorCode=null)
    {
        $response = [
            "code"=>$errorCode!=null?$errorCode:static::$responseCode[$httpCode]['code'],
            "message"=>$message==null?static::$responseCode[$httpCode]['message']:$message,
        ];
        if($data != null)  $response['data'] = $data;
        return response()->json($response,$httpCode);
    }

    public static function failRes($httpCode = 500,$data=null, $message = null,  $errors = null,$errorCode=null)
    {
        $response = [
            "code"=>$errorCode!=null?$errorCode:static::$responseCode[$httpCode]['code'],
            "message"=>$message==null?static::$responseCode[$httpCode]['message']:$message,
        ];
        if($data != null)  $response['data']=$data;
        if($errors != null){
            $response["errors"]=$errors;
        }
        return response()->json($response,$httpCode);
    }

    public function paginateRes($httpCode = 200, $data, $message = null, $errorCode=null)
    {
		$data = $data->toArray();
        unset($data['links'], $data['next_page_url'], $data['prev_page_url'],  $data['first_page_url'],  $data['last_page_url']);
        $response = [
            "code"=>$errorCode!=null?$errorCode:static::$responseCode[$httpCode]['code'],
            "message"=>$message==null?static::$responseCode[$httpCode]['message']:$message,
            ...$data
        ];

        return response()->json($response,$httpCode);
    }
}
