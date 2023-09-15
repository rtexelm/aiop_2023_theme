<?php
function artistNameFormat($name1, $name2, $name3) {

    if ($name1) $name1 .= " ";
    if ($name3) $name2 .= ", ";

    return $name1 . $name2 . $name3;
}

function scheduleFormat($start, $end) {

    $start = $start ?: '1:00pm';
    $end = $end ?: '4:00pm';

    [$start_h, $start_temp] = explode(":", $start);
    $start_m = substr($start_temp,0,2);
    $start_ap = substr($start_temp, -2);

    [$end_h, $end_temp] = explode(":", $end);
    $end_m = substr($end_temp,0,2);
    $end_ap = substr($end_temp, -2);

    $start_final;
    if($start_m == "00"){
        $start_final = $start_h;
    }else{
        $start_final = $start_h.':'.$start_m;
    }

    $end_final;
    if($end_m == "00"){
        $end_final = $end_h.$end_ap;
    }else{
        $end_final = $end_h.':'.$end_m.$end_ap;
    }

    return $start_final."&ndash;".$end_final;
}
    
?>