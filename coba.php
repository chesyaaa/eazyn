<?php
$a = array(
            array(1, 2, 3, 17),
            array(1, 2, 3, 17)
        );
foreach ($a as $v) {
//     echo "$v[1]";
// }
    if ($v[0] == 16) {
    echo $v[0];
    break;
    }
}
?>