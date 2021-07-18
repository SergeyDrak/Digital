<?php

namespace Sergeydrak\SubscriptionBundle\Controller;

use Sergeydrak\SubscriptionBundle\Form\SubscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;

class SubscriptionFormViewController extends AbstractController
{

    private $requestStack;

    private $writer;

    private $rider;

    private $coder;


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
    }

    /**
     * @Route("/", name="subscription_form_viiew")
     */
    public function index(): Response
    {
        $form = $this->createForm(SubscriptionType::class);
        $form->handleRequest($this->requestStack->getCurrentRequest());
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $data_array = [];
            // data is an array with "name", "email", and "category" keys
            foreach ($data as $key => $value) {
                if (is_object($value)) {
                    $data_array[$key] = $value->getName();
                } else {
                    $data_array[$key] = $value;
                }
            }
            $this->writer->writeStringData(
              $this->coder->jsonEncoder($data_array)
            );
            $this->redirect($this->generateUrl('subscription_form_viiew'));
        }

        return $this->render(
          '@subscription/subscription_form_view.html.twig',
          [
            'form' => $form->createView(),
          ]
        );
    }

}
