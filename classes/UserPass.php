<?php

class UserPass
{
    protected $usrPass;

    public function __construct(string $login)
    {
        $this->usrPass = $login;
    }

    public function getPassword()
    {
        return $this->usrPass;
    }

}

