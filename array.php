<?php

$places = array(

            array('city' => 'Tokyo', 'country' => 'Japan', 'continent' => 'Asia'),

            array('city' => 'Maxico City', 'country' => 'Maxico', 'continent' => 'North America'),

            array('city' => 'New York City', 'country' => 'USA', 'continent' => 'North America'),

            array('city' => 'Mumbai', 'country' => 'India', 'continent' => 'Asia'),

            array('city' => 'Seul', 'country' => 'Korea', 'continent' => 'Asia'),

            array('city' => 'Shanghai', 'country' => 'China', 'continent' => 'Asia'),

            array('city' => 'Lagos', 'country' => 'Nigeria', 'continent' => 'Africa'),

            array('city' => 'Buenes Ares', 'country' => 'Argentina', 'continent' => 'South America'),

            array('city' => 'Cairo', 'country' => 'Egypt', 'continent' => 'Africa'),

            array('city' => 'London', 'country' => 'UK', 'continent' => 'Europe'));


print_r($places);

echo $places[3];

echo $places[3]['city'];

echo $places[3]['continent'];

echo $places[3]['country'] = 'Bangladesh';

?>
