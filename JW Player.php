// This method user to fetch data from database and upload it into J W Player 
public static function jwplayerBluckUpload(Request $request, Response $response) {
        $jwplatform = new Jwplayer\JwplatformAPI(Config::$JWPlayerKeyName, Config::$JWPlayerSecretKey);
        $results=geData("VODFORJWPlayer");// this function return all the data you want to uplaod on JW Player.
        if($results ){
         foreach ($results as &$value) {
        if(!empty($value['download_url'])) $upload_params['download_url'] = $value['download_url'];
        if(!empty($value['title'])) $upload_params['title']               = html_entity_decode($value['title']);
        if(!empty($value['description'])) $upload_params['description']   = html_entity_decode($value['description']);          
        if(!empty($value['date'])) $upload_params['date']                 = is_int($value['date']) ? $value['date'] : strtotime($value['date']);
        if(!empty($value['VideoOnDemandGenre'])) $upload_params['tags']= html_entity_decode($value['VideoOnDemandGenre']);
            $response = $jwplatform->call("/videos/create", $upload_params);
  
            if($response['status'] === 'ok') {
             echo $upload_params['title'] . " upload success. key = " . $response['video']['key'] . "\n";
                }
            else {
                  echo $upload_params['title'] . " upload failed.\n"; 
            }
        }  

    }
}
