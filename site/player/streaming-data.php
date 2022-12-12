<?php 

$xml_playing=simplexml_load_file("http://streaming.advancehost.com.br/api/T1RVeU5nPT0rRA==");
$playing = $xml_playing->musica_atual;

$streaming_data = array(
    "streaming" => array(
        "start" => "12:00",
        "end" => "13:00",
        "status" => "offair",
        "genre" => "female",
        "message" => "Hoje é festa lá no meu apê pode aparcer",
        "messageAvatar" => "http://localhost/akiba_2.0/site/assets/img/img/ex_avatar.webp",
        "streamer" => "Aki-chan",
        "program" => "Let's Play Akiba",
        "programLogo" => "http://localhost/akiba_2.0/site/assets/img/img/ex_programa.webp",
        "avatar" => "http://localhost/akiba_2.0/site/assets/img/img/ex_avatar.webp",
        "music" => utf8_decode($playing)
    ),
    "request-music" => array(
        "status" => "open"
    )
);

echo json_encode($streaming_data);

?>