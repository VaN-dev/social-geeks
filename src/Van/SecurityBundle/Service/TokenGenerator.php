<?php

namespace Van\SecurityBundle\Service;

/**
 * Class TokenGenerator
 * @package Van\SecurityBundle\Service
 */
class TokenGenerator
{
    /**
     * @return string
     */
    public function generateToken()
    {
        $token = hash('sha1', time() . ':' . md5(rand(0,100)));

        return $token;
    }
}