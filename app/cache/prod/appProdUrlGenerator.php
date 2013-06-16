<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'atlas_front_end_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'atlas_front_end_booking' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::bookingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/booking',    ),  ),  4 =>   array (  ),),
        'atlas_front_end_rooms' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::roomsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rooms',    ),  ),  4 =>   array (  ),),
        'atlas_front_end_gallery' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::galleryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gallery',    ),  ),  4 =>   array (  ),),
        'atlas_front_end_location' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::locationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/location',    ),  ),  4 =>   array (  ),),
        'atlas_front_end_help' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::helpAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/help',    ),  ),  4 =>   array (  ),),
        'atlas_front_end_investors' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::investorsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/investors',    ),  ),  4 =>   array (  ),),
        'atlas_front_end_privacy_policy' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::privacyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/privacy',    ),  ),  4 =>   array (  ),),
        'atlas_front_end_terms' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Atlas\\FrontEndBundle\\Controller\\PageController::termsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/terms',    ),  ),  4 =>   array (  ),),
        'atlas_booking_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Atlas\\BookingBundle\\Controller\\BookingController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/booking/',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
