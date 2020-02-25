<?php 
namespace DesignPatterns\Structural\Adapter;

use WildDog;
use WildDogAdapter;

require('../../vendor/autoload.php');

(new WildDogAdapter(new WildDog))->roar();