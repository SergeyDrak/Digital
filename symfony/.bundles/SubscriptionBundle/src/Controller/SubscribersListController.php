<?php

namespace Sergeydrak\SubscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubscribersListController extends AbstractController
{

    private $requestStack;

    private $writer;

    private $rider;

    private $coder;

    private $header;

    private $raw_data_twig;

    public function __construct(
      RequestStack $requestStack,
      WriterController $writer,
      RiderController $rider,
      CoderController $coder
    ) {
        $this->requestStack = $requestStack;
        $this->writer = $writer;
        $this->rider = $rider;
        $this->coder = $coder;
        $this->header = [];
        $this->raw_data_twig = [];
    }


    /**
     * @Route("/subscribers", name="subscribers_list")
     */
    public function index(): Response
    {
        $raw_data_twig = $this->rider->readLineByLine();
        $data_header_table = [];
        $this->raw_data_twig = $raw_data_twig;

        //header var for table (twig)
        if ($raw_data_twig !== false) {
            foreach ($raw_data_twig[0] as $key => $value) {
                $data_header_table[] = $key;
            }
            $this->header = $data_header_table;
        }else{
            $this->header = false;
        }
        dump($this->raw_data_twig);

        return $this->render(
          '@subscription/subscription_list.html.twig',
          [
            'header' => $this->header,
            'data' => $this->raw_data_twig,
          ]
        );
    }

}
