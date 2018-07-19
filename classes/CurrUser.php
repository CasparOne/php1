<?php
require __DIR__ . '/UserLogin.php';
require __DIR__ . '/UserPass.php';

class CurrUser
{
    protected $usrLogPass;

    public function __construct($login, $password)
    {
        $login = new UserLogin($login);
        $password = new UserPass($password);
        $this->usrLogPass[$login->getLogin()] = $password->getPassword();
    }

    public function getUsrLoginPassword()
    {
        return $this->usrLogPass;
    }

}