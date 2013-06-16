<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // atlas_front_end_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'atlas_front_end_homepage');
            }

            return array (  '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::homeAction',  '_route' => 'atlas_front_end_homepage',);
        }

        // atlas_front_end_booking
        if ($pathinfo === '/booking') {
            return array (  '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::bookingAction',  '_route' => 'atlas_front_end_booking',);
        }

        // atlas_front_end_rooms
        if ($pathinfo === '/rooms') {
            return array (  '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::roomsAction',  '_route' => 'atlas_front_end_rooms',);
        }

        // atlas_front_end_gallery
        if ($pathinfo === '/gallery') {
            return array (  '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::galleryAction',  '_route' => 'atlas_front_end_gallery',);
        }

        // atlas_front_end_location
        if ($pathinfo === '/location') {
            return array (  '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::locationAction',  '_route' => 'atlas_front_end_location',);
        }

        // atlas_front_end_help
        if ($pathinfo === '/help') {
            return array (  '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::helpAction',  '_route' => 'atlas_front_end_help',);
        }

        // atlas_front_end_investors
        if ($pathinfo === '/investors') {
            return array (  '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::investorsAction',  '_route' => 'atlas_front_end_investors',);
        }

        // atlas_front_end_privacy_policy
        if ($pathinfo === '/privacy') {
            return array (  '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::privacyAction',  '_route' => 'atlas_front_end_privacy_policy',);
        }

        // atlas_front_end_terms
        if ($pathinfo === '/terms') {
            return array (  '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::termsAction',  '_route' => 'atlas_front_end_terms',);
        }

        // atlas_booking_homepage
        if (rtrim($pathinfo, '/') === '/booking') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'atlas_booking_homepage');
            }

            return array (  '_controller' => 'Atlas\\BookingBundle\\Controller\\BookingController::indexAction',  '_route' => 'atlas_booking_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
