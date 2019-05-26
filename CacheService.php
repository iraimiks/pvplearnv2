<?php
class CacheService implements CacheInterface{
    public function set(string $key, $values,int $duarti){

    }

    public function get(){
        
        echo "Method1 Called";
    }
   

}
$key = base64_encode('77qn9aax-qrrm-idki:lnh0-fm2nhmp0yca7');
$colors = array("red", "green", "blue", "yellow"); 
$duartion = 1;
$list_ofarry = array (
        'recipient' => 
        array (
                'address1' => '11025 Westlake Dr,',
                'city' => 'Charlotte',
                'country_code' => 'US',
                'state_code' => 'NC',
                'zip' => 28273,   
        ) ,
        $items => array(
                 0 => 
                  array (
                    'quantity' => 2,
                    'variant_id' => 7679,
                  )
        )         
);
foreach ($list_ofarry as $array) {
        echo '<br>';
    foreach($array as $key => $value){
        echo 'Key=>' . $key . ' value=>'.$value."\n";
        foreach($items as  $key => $value){
            echo 'Key=>' . $key . ' value=>'.$value."\n";
        }
    }
}

 $obj = new SomeClass(); 
 $obj->set($key,$values,$duartion);