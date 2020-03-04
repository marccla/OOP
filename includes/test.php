<?
// require('dbconfig.php');


class Test extends Dbconfig {
  public function getUsers() {
    $sql = "SELECT * FROM users";
    $stmt = $this->connect()->query($sql);
    while($row = $stmt->fetch()) {
      var_dump($row);
    }
  }
  // public function saveUser() {
  //   $sql = "INSERT INTO users (fname, lname, email) VALUES ('derper', 'deherp', 'dahurp')";
  //   $stmt = $this->connect()->query($sql);
  //   $stmt = connect()->conn;
  // }
}

$testObj = new Test();
    $testObj->getUsers();