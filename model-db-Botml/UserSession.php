<?php
//pour se souvenir des info utilisateur quand il se connecte
class UserSession
{
	public function __construct()
	{
		if(session_status() == PHP_SESSION_NONE)
		{
            // demarrage du module PHP de gestion des sessions.
			session_start();
		}
	}

	
    public function create($userId, $userPseudo, $userRole)
    {
        // construction de la session utilisateur.
        $_SESSION['user'] =
        [
            'userId'    => $userId,
            'userPseudo' => $userPseudo,
            'userRole'  => $userRole,
        ];
    }

    public function destroy()
    {
        // destruction
        $_SESSION = array();
        session_destroy();
    }

	
    public function getUserPseudo()
    {
        if($this->isAuthenticated() == false)
        {
            return null;
        }

        return $_SESSION['user']['userPseudo'];
    }

	
    public function getUserRole()
    {
        if($this->isAuthenticated() == false)
        {
            return null;
        }

        return $_SESSION['user']['userRole'];
    }

	
    public function getUserId()
    {
        if($this->isAuthenticated() == false)
        {
            return null;
        }

        return $_SESSION['user']['userId'];
    }

	
	public function isAuthenticated()
	{
		if(array_key_exists('user', $_SESSION) == true)
		{
			if(empty($_SESSION['user']) == false)
			{
				return true;
			}
		}

		return false;
	}
}