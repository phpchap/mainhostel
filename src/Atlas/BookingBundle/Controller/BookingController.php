<?php

namespace Atlas\BookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Atlas\BookingBundle\Entity\Booking;

class BookingController extends Controller
{
    public function indexAction()
    {
        $booking = new Booking();
        
        $booking->setHash(md5(time()));
        $booking->setPrice("1.00");
        $booking->setDescription("asdf asdf asdf asdf asdf faf");
        $booking->setNumberOfGuests(4);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($booking);
        $em->flush();        
        
        return $this->render('AtlasBookingBundle:Booking:index.html.twig');
    }
}
