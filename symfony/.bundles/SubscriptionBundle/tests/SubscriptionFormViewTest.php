<?php

namespace Sergeydrak\SubscriptionBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SubscriptionFormViewTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Subscription form');
        $this->assertSelectorExists('form','FormExist');
    }
}
