<?php
function artistNameFormat($name1, $name2, $name3) {

    $formattedName = "";
    
    if ($name1) $name1 .= " ";
    if ($name3) $name2 .= ", ";

    return $name1 . $name2 . $name3
}
?>