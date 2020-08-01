<?php
    namespace App\Controller;

    // https://symfony.com/doc/3.4/page_creation.html#creating-a-page-route-and-controller

    use Symfony\Component\HttpFoundation\Response;
//    use Symfony\Component\Routing\Annotation\Route;

    class ArticleController {
        public function index() {

            return new Response('<html><body>Hello</body></html>');

        }
    }