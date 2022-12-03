<?php
$option = $_GET['option'];
if ( $option == 1 ) {
$data = [ 'a', 'b', 'c' ];
// will encode to JSON array: ["a","b","c"]
// accessed as example in JavaScript like:
// result[1] (returns "b")
} else {
$data = ['name' => 'Peter', 'age' => 20 ];
// will encode to JSON object: {"name":"Peter","age": 20}
// accessed as example in JavaScript like:
// result.name or result['name']
// (returns "Peter")
}
header('Content-type: application/json');
echo json_encode( $data );
?>