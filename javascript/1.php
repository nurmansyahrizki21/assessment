<?php
$results = array( array("username" => "ali", "hair_color" => "brown", "height" => 1.2),
array("username" => "marc", "hair_color" => "blue", "height" =>
1.4), array("username" => "joe", "hair_color" => "brown", "height" => 1.7), array("username" => "zehua", "hair_color" => "black", "height" => 1.8) );

function mini_json($results) {
  $data = array();
  foreach($results as $result) {
    array_push($data, array_values($result));
  }
  $json = array(
    'h' => array(
      'username',
      'hair_color',
      'height',
    ),
    'd' => $data,
  );
  echo json_encode($json);
}

mini_json($results);
