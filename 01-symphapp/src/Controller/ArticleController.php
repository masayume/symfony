<?php
    namespace App\Controller;

    // https://symfony.com/doc/3.4/page_creation.html#creating-a-page-route-and-controller

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class ArticleController extends Controller {
        /*
         * @Route("/")
         * @Method("GET")
        */

        public function index() {

            // return new Response('<html><body>Hello</body></html>');

            $articles= ['Article 1', 'Article 2'];

            return $this->render('articles/index.html.twig', array('articles' => $articles));

        }
    }