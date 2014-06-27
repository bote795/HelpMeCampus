<?php
ini_set('display_errors',1);
function email()
{
      $userid = mysql_insert_id();
      $key = $username . $email . date('mY');
      $key = md5($key);
      $confirm = mysql_query("INSERT INTO `confirm` VALUES(NULL,'$userid','$key','$email')");	
      if($confirm)
      {
                  //include the swift class
                  include_once 'swift/swift_required.php';
                  //put info into an array to send to the function
                  $info = array(
                      'username' => $username,
                      'email' => $email,
                      'key' => $key);
              
                  //send the email
                  if(send_email($info))
                  {
                      //email sent
                      $action['result'] = 'success';
                      array_push($text,'Thanks for signing up. Please check your email for confirmation!');
                  }
                  else
                  {
                      $action['result'] = 'error';
                      array_push($text,'Could not send confirm email');
                  }
              
      }
      else
      {
        $action['result'] = 'error';
        array_push($text,'Confirm row was not added to the database. Reason: ' . mysql_error());
        
      }
          $action['text'] = $text;
      echo show_errors($action);
    
}
function format_email($info, $format){

	//set the root
 	 $root = './../';
  
      //grab the template content
    $template = file_get_contents($root.'/emailTemplate/signup_template.'.$format);
	//replace all the tags
	$template = preg_replace('{USERNAME}', $info['username'], $template);
	$template = preg_replace('{EMAIL}', $info['email'], $template);
	$template = preg_replace('{KEY}', $info['key'], $template);
  $template = preg_replace('{SITEPATH}','https://bote795.kd.io/HelpMeCampus/php/', $template);
	echo $template;
	//return the html of the template
	return $template;

}

//send the welcome letter
function send_email($info){
 
	//format each email
	$body = format_email($info,'html');
	$body_plain_txt = format_email($info,'txt');
	//setup the mailer
    $transport = Swift_MailTransport::newInstance();
    $mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance();
	$message ->setSubject('Welcome to HelpMeCampus');
	$message ->setFrom(array('noreply@sitename.com' => 'Site Name'));
	$message ->setTo(array($info['email'] => $info['username']));
	
	$message ->setBody($body_plain_txt);
	$message ->addPart($body, 'text/html');
			
	$result = $mailer->send($message);
        // Pass a variable name to the send() method
    if (!$mailer->send($message, $failures))
    {
      echo "Failures:";
      print_r($failures);
    }  
	    // To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Site Name <noreply@sitename.com>' . "\r\n";
//	$message = wordwrap($message, 70, "\r\n");
//:    mail($info['email'] , "Welcome to HelpMeCampus", $message, $headers);
	$test=mail($info['email'],"Welcome to HelpMeCapus", "hi");
	if($test)
	{
		echo "mail was sent sucessfully";
	}
	else
	{
		echo "mail wasnt sucessfuly sent";
	}
	return $result;
	
}

//cleanup the errors

function show_errors($action){
	$error = false;
	if(!empty($action['result']))
    {
		$error = "<ul class=\"alert $action[result]\">"."\n";
		if(is_array($action['text'])){	
			//loop out each error
			foreach($action['text'] as $text){
				$error .= "<li><p>$text</p></li>"."\n";
			}	
		}else{
			//single error
			$error .= "<li><p>$action[text]</p></li>";
		}
		$error .= "</ul>"."\n";
	}
	return $error;
}
function CheckEmptyFields($action, $params)
{
  $error = false;
  $temp = array();
  if(is_array($action['var']) &&  !empty($action['var']))
  {
    foreach( $action['var'] as $index => $text )
    {
      if(empty($text))
      {
        $error = true;
        array_push($temp, 'You forgot your '. $params[$index]);
      }
    }
  }
  if($error == true)
  {
  	return $temp;
  }
  else
  	return $error;
}
?>
