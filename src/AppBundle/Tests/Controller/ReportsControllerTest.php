<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReportsControllerTest extends WebTestCase
{
    public function testReports()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Reports');
    }

    public function testPatientsreport()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/PatientsReport');
    }

}
