<?php  
class User 
{    

  public $id;
  public $username;    
  public $school;
  public $app_name;  
  function __construct($id, $username, $school, $app_name) {
      $this->id = $id;
      $this->username = $username;
      $this->school = $school;
      $this->app_name = $app_name;
  
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