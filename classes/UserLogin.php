<?php

class UserLogin
{
    protected $usrLogin;

    public function __construct(string $login)
    {
        $this->usrLogin = $login;
    }

    public function getLogin()
    {
        return $this->usrLogin;
    }

}