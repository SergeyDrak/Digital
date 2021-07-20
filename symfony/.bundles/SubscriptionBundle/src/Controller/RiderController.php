<?php

namespace Sergeydrak\SubscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RiderController extends AbstractController
{
    public function __construct(CoderController $coder)
    {
        $this->coder = $coder;
    }

    private $coder;

    const PATH_TO_DATA = __DIR__."/../../data/subscribers.txt";

    public function riderFileData()
    {
        return file(self::PATH_TO_DATA, FILE_IGNORE_NEW_LINES);
    }

public function readLineByLine()
{
    $data_twig = [];
    if(!empty($this->riderFileData()))
    {

        foreach ($this->riderFileData() as $key => $value){
            $data_twig[$key] = $this->coder->jsonDecoder($value);
        }
        return $data_twig;
    }else{
        return false;
    }

}

}
