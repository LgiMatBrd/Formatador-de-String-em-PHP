<meta charset="utf-8">
<?php

echo conversor('<b> LUIGI MATHEUS AFORNALLI BREDA </b>'); echo '<br /><br />';

function conversor($str,$a_char = array("'","-"," ")){   
    $string = strtolower($str);
    foreach ($a_char as $temp){
        $pos = strpos($string,$temp);
        if ($pos){
            $mend = '';
            $a_split = explode($temp,$string);
            foreach ($a_split as $temp2){
                $mend .= ucfirst($temp2).$temp;
                }
            $string = substr($mend,0,-1);
            }   
        }
    return ucfirst($string);
}