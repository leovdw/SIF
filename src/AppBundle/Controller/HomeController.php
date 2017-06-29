<?php
/**
 * Created by PhpStorm.
 * User: benoit
 * Date: 28/06/2017
 * Time: 11:42
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class HomeController
 * @package AppBundle\Controller
 */
class HomeController extends Controller
{
    /**
     * @return Response
     * @Route("/", name="intro_index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $intro = $em->getRepository('AppBundle:Intro')->findAll();

        $post = $em->getRepository('AppBundle:Article')->findByVisible(1);

        $project = $em->getRepository('AppBundle:Projects')->findAll();

        return $this->render('Home/index.html.twig', [
            'intro' => $intro,
            'post' => $post,
            'project' => $project,
        ]);
    }

    /**
     * @return Response
     * @Route("/actualites/{id}", name="index_show", requirements={"id" : "\d+"})
     */
    public function showAction(Article $article)
    {
        $em = $this->getDoctrine()->getManager();

        $actu = $em->getRepository('AppBundle:Article')->find($article->getId());

        return $this->render(':Home:show.html.twig', [
            'article' => $actu,
        ]);

    }
    /**
     *
     * @return Response
     * @Route("/actualites", name="index_actualites", requirements={"id" : "\d+"})
     */
    public function actualiteAction()
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('AppBundle:Article')->findByVisible(1);

        return $this->render('Home/acualites.html.twig', [
            'post' => $post,
        ]);
    }
}