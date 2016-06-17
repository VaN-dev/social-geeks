<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/lo')) {
            if (0 === strpos($pathinfo, '/log')) {
                if (0 === strpos($pathinfo, '/login')) {
                    // van_security_login
                    if ($pathinfo === '/login') {
                        return array (  '_controller' => 'Van\\SecurityBundle\\Controller\\DefaultController::loginAction',  '_route' => 'van_security_login',);
                    }

                    // van_security_login_check
                    if ($pathinfo === '/login_check') {
                        return array('_route' => 'van_security_login_check');
                    }

                }

                // logout
                if ($pathinfo === '/logout') {
                    return array('_route' => 'logout');
                }

            }

            // van_security_lost_password
            if ($pathinfo === '/lost-password') {
                return array (  '_controller' => 'Van\\SecurityBundle\\Controller\\DefaultController::passwordRetrievalAction',  '_route' => 'van_security_lost_password',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            // van_security_reset_password
            if ($pathinfo === '/reset-password') {
                return array (  '_controller' => 'Van\\SecurityBundle\\Controller\\DefaultController::resetPasswordAction',  '_route' => 'van_security_reset_password',);
            }

            // van_user_registration
            if ($pathinfo === '/register') {
                return array (  '_controller' => 'Van\\UserBundle\\Controller\\RegistrationController::indexAction',  '_route' => 'van_user_registration',);
            }

        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
