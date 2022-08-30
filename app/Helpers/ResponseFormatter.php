<?php

namespace App\Helpers;

class ResponseFormatter
{
  // protected static $response = [
  //   '@context' => "https://project-open-data.cio.gov/v1.1/schema/catalog.jsonld",
  //   '@id'      =>  "https://data.pu.go.id/data.json", 
  //   '@type'      =>  "dcat:Catalog", 
  //   'data' => null
  // ];

  protected static $response = [
    '@context'  => 'https://project-open-data.cio.gov/v1.1/schema/catalog.jsonld',
    '@id'       => 'https://data.pu.go.id/data.json',
    '@type'     => 'dcat:Catalog',
    'conformsTo'=> 'https://project-open-data.cio.gov/v1.1/schema',
    'describedBy'     => 'https://project-open-data.cio.gov/v1.1/schema/catalog.json',
    'dataset'         => [
      '@type' => 'dcat:Dataset',
      'accessLevel' => 'public',
      'contactPoint' => [
        'fn' => 'Diskominfotiks Rohil',
        'hasEmail' => 'diskominfotiks@rohilkab.go.id'
      ],
      'description'   => 'ini adalah deskripsi response',
      'distribution'  => [
        "@type" => "dcat:Distribution",
        "downloadURL" => "https://data.pu.go.id/sites/default/files/Jembatan%20Nasional%20Tahun%202021_3.csv",
        "mediaType" => "text/csv",
        "format" => "csv",
        "description" => "<p>Resource ini berisi data Jembatan Nasional tahun 2021</p>",
        "title" => "Jembatan Nasional Tahun 2021"
      ],
      "identifier" => "bcb40b39-ab20-40b5-bc8d-31ea105c0367",
      "issued" => "2021-12-08",
      "keyword" => [
        "jembatan",
        "jembatan nasional",
        "jembatan pupr"
      ],
      "landingPage" => "sodap.rohilkab.go.id",
      "modified" => "2022-08-12",
      "publisher" => [
        "@type" => "org:Organization",
        "name" => "Dinas Kominfotiks Rohil"
      ],
      "theme" => [
        "konektifitas",
        "jaringan"
      ],
      "title" => "Judul Data"
    ]
  ];

  public static function success($data = null, $message = null)
  {
    // self::$response['meta']['message'] = $message;
    //self::$response['data'] = $data;

    return response()->json(self::$response);
  }

//   public static function error($data = null, $message = null, $code = 400)
//   {
//     self::$response['meta']['status'] = 'error';
//     self::$response['meta']['code'] = $code;
//     self::$response['meta']['message'] = $message;
//     self::$response['data'] = $data;

//     return response()->json(self::$response, self::$response['meta']['code']);
//   }

}