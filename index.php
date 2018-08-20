<h1>Hello</h1>
<?php
date_default_timezone_set("America/New_York");
$time = date("H:i:s");
sendText("Bây giờ là ". $time.  "Ở Mỹ");
function sendText($text){
    $arr = array (
        'messages' =>
            array (
                0 =>
                    array (
                        'text' => $text,
                    ),
            ),
    );
    echo json_encode($arr);

}
?>
