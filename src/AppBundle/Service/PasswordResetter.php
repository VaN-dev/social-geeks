<?php

namespace AppBundleBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\User\User;

class PasswordResetter
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var TokenGenerator
     */
    protected $tokenGenerator;

    /**
     * @var \Swift_Mailer
     */
    protected $mailer;

    /**
     * PasswordResetter constructor.
     * @param EntityManagerInterface $em
     * @param TokenGenerator $tokenGenerator
     * @param \Swift_Mailer $mailer
     */
    public function __construct(EntityManagerInterface $em, TokenGenerator $tokenGenerator, \Swift_Mailer $mailer)
    {
        $this->em = $em;
        $this->tokenGenerator = $tokenGenerator;
        $this->mailer = $mailer;
    }

    /**
     * @param User $user
     * @return array
     */
    public function resetPassword(User $user)
    {
        // generating token
        $token = $this->tokenGenerator->generateToken();

        // set expiration date
        $expiredAt = new \DateTime();
        $expiredAt->modify('+1week');

        // updating token and expiration date
        $user->setPasswordToken($token);
        $user->setPasswordTokenExpiredAt($expiredAt);

        // flushing
        $this->em->flush();

        // sending e-mail
        $success = $this->mailer->sendResetPasswordMail($user);

        // response
        if (true === $success) {
            $output = [
                "success" => true
            ];
        } else {
            $output = [
                "success" => false,
                "error" => "Une erreur est survenue lors de l'envoi de l'e-mail."
            ];
        }


        return $output;
    }
}