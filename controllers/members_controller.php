<?php
  class MembersController {
	
	public function save() {

    $members = Member::Exist($_POST['firstname'], $_POST['lastname'],$_POST['category'], $_POST['mail']);
    foreach ($members as $member) {
        $firstname = $member->fist_name;
        $lastname = $member->last_name;
        $mail = $member->mail;
    }

    if ( $_POST['firstname']!= $firstname and $_POST['lastname']!= $lastname and $_POST['mail']!= $mail){
        $add = Member::AddMember($_POST['firstname'], $_POST['lastname'], $_POST['password'], $_POST['mail'], $_POST['birthdate'], $_POST['phone'], $_POST['continent'], $_POST['school'], $_POST['category']);
        require_once('views/pages/saved.php');
    }
   else{
    require_once('views/pages/errorConnection.php');
   }
}
}
