<?php
/**
 * Created by PhpStorm.
 * User: ignacio
 * Date: 07/04/15
 * Time: 19:50
 */

namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class RandomController
{
    public function indexAction($limit)
    {
        return new Response(
          '<html><body>Number: '.rand(1, $limit).'</body></html>'
        );
    }

}