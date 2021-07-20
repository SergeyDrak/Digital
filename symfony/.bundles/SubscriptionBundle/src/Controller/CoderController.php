<?php

namespace Sergeydrak\SubscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Encoder\EncoderInterface;
use Symfony\Component\Serializer\Encoder\DecoderInterface;

class CoderController extends AbstractController
{

    public function __construct(
      EncoderInterface $encoderInterface,
      DecoderInterface $decoderInterface
    ) {
        $this->decoderInterface = $decoderInterface;
        $this->encoderInterface = $encoderInterface;
    }

    private $encoderInterface;

    private $decoderInterface;

    /**
     * @param $data
     *
     * @return mixed|string
     */
    public function jsonEncoder($data)
    {
        return $this->encoderInterface->encode($data, 'json');

    }

    /**
     * @param $data
     *
     * @return mixed|string
     */
    public function jsonDecoder($data)
    {
        if(!empty($data))
        {
            return $this->decoderInterface->decode($data, 'json');
        }

    }

}
