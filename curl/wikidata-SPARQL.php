<?php

    $query = '
    select ?lifeExpectancy {
       wd:Q39 wdt:P2250 ?lifeExpectancy .
    }
   ';

   $headers = Array(
    # "Content-Type: application/json",
      "Accept: application/sparql-results+json",
   );

   $url         = 'https://query.wikidata.org/sparql';

   $queryFields = ['query' => $query ];
   $postFields  = http_build_query($queryFields);

   $req         = curl_init();

   curl_setopt($req, CURLOPT_URL           , $url);
 # curl_setopt($req, CURLOPT_POST          , true);                    # 
   curl_setopt($req, CURLOPT_POSTFIELDS    , $postFields);             # Implicitely set by CURLOPT_POSTFIELDS
   curl_setopt($req, CURLOPT_USERAGENT     ,'Renes wikidata querier'); # Prevent HTTPS Status 403
   curl_setopt($req, CURLOPT_HTTPHEADER    , $headers);
   curl_setopt($req, CURLOPT_RETURNTRANSFER, true);                    # Let curl_exec return the content rather than printing it to stdout?

   $result = curl_exec($req);
   print($result);
?>
