<?

class Article {
public $title;
public $content;
public $category;

public function __construct($title, $content, $category) {
  $this->title = $title;
  $this->content = $content;
  $this->category = $category;
    }
}

$article1 = new Article('The hooorsses!', 'Alot of content about these hooses!', 'Animals');
// $article2 = new Article('The Dooogs!', 'Alot of content about these Doogses!', 'Animals');
// $article3 = new Article('The IIIpaaads!', 'Alot of content about these Ipadses!', 'Tech');

// $titles = [
//   "The hooses!",
//   "The dooogs!",
//   "The Tech!"
// ];

// $contents = [
//   "The hooses!333",
//   "The dooogs!333",
//   "The Tech!33"
// ];

// $categories = [
//   "The hooses!",
//   "The dooogs!",
//   "The Tech!"
// ];

// $articles = new Article($titles, $contents, $categories);
