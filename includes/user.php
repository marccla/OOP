<? 

class user {
  public $username;
  private $email;
  public $role = 'member';


  public function __construct($username, $email) {
    $this->username = $username;
    $this->email = $email;
  }

  // Getter
  public function getEmail() {
    return $this->email;
  }
  // Setter
  public function setEmail($val)  {     
    return $this->email = $val;

  }

}

class superUser extends User {
  public $role = 'superuser';
  public $password;

  public function __construct($username, $email, $password)  {
    parent::__construct($username, $email);
    $this->password = $password;
  }
} 



$newUser = new user('pidde', 'huhuhuh');
// var_dump($newUser); 
// print_r($newUser->setEmail('derp@derp.com'));

// print_r($newUser->getEmail());
$admin = new superUser('admin', 'admin@admin.se', 'derperpassword');
// print_r($admin);




?>