<?php
namespace DesignPatterns\Structural\Proxy;

$door = new SecureDoor(new LabDoor);
$door->open('invalid'); // Big no! It ain't possible.

$door->open('xxx'); // Opening lab door
$door->close(); // Closing lab door

// wiki: a proxy, is a class funcitoning as an interface to soemthing else. A proxy is a warpper or agent object tha tis being called by the client to access the real serving object behind the scenes. In the proxy extra functionality can be provided, e.g. checking preconditions before operations on the real object are invoked.