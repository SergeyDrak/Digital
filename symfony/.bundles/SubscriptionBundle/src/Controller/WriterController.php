<?php

namespace Sergeydrak\SubscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WriterController extends AbstractController
{
    const PATH_TO_DATA = __DIR__."/../../data/subscribers.txt";

    public function writeStringData($data){
        $fd = fopen(self::PATH_TO_DATA, 'a+') or die("Failed to write to file.");
        fwrite($fd, $data . PHP_EOL);
        fclose($fd);
    }

}
