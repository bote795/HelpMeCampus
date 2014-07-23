<?php  
class User 
{    

  public $id;
  public $username;    
  public $school;
  public $app_name;  
  function __construct($id, $username, $school, $app_name, $name, $major, $joined) {
      $this->id = $id;
      $this->username = $username;
      $this->school = $school;
      $this->app_name = $app_name;
      $this->name = $name;
      $this->major = $major;
      $this->joined = $joined;
  
  }
  
  public function getName() {
      return $this->username;
  }
  public function getSchool() {
      return $this->school;
  }
    public function getAppName() {
      return $this->app_name;
  }
}
?>