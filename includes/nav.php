<? 
class Navbar {
  public $links;

  public function __construct($links) {
    $this->links = $links;
  }
}

$navbar = new Navbar($links);

$navbar->links = [
  'www.google.se',
  'www.facebook.com',
  'www.instagram.com'
]; ?>