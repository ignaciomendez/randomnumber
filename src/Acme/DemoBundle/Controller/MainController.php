<?php
/**
 * Created by PhpStorm.
 * User: ignacio
 * Date: 07/04/15
 * Time: 20:04
 */

namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class MainController
{
    public function indexAction()
    {
        return new Response(
            '<html><body>
                    Hello, this is the main page. Here is a random number (1 ~ 100). <p>Number: '.rand(1, 100).

            '</p>
            <p>Please visit /random/x and set x as the max random number</p></body></html>'
        );
    }

}