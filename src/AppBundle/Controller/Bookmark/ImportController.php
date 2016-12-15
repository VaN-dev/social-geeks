<?php

namespace AppBundle\Controller\Bookmark;

use AppBundle\Form\Type\Bookmark\ImportType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ImportController
 * @package AppBundle\Controller\Bookmark
 */
class ImportController extends Controller
{


    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function importAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(ImportType::class, []);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->getData()["file"];
//            $html = file_get_contents($file->getRealPath());

            $parser = $this->get("app.parser.bookmark_parser");

            $parser->parseNetscape($file->getRealPath(), 0, 'myURL', 'myFolder');
            echo "<p># of urls: " . $parser->urlsParsed."<br>";
            echo "# of folder: " . $parser->foldersParsed."<br>";
            echo "Error Messages: " . $parser->error_message;

            die();

            $parser = $this->get('app.parser.netscape_bookmark_parser');
            $bookmarks = $parser->parseFile($file->getRealPath());
            var_dump($bookmarks);

            die();

            echo '<pre>';
            \Doctrine\Common\Util\Debug::dump($file->getRealPath());
//            \Doctrine\Common\Util\Debug::dump($file->getTargetFile());
            \Doctrine\Common\Util\Debug::dump($content);
            echo '</pre>';
            die();

            $em->persist();
            $em->flush();

            $request->getSession()->getFlashBag()->add("success", "Bookmarks successfully imported.");

            return new RedirectResponse($this->generateUrl('app.bookmarks'));
        }

        die();
    }
}
