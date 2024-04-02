<?php

class User {
    public $user_id;
    public $first_name;
    public $last_name;
    public $email;
    public $mdp;
    public $phone_number;
    public $date_of_birth;
    public $licence_seniority;
    public $departure_date;
    public $arrival_date;
    public $role;

    public static function formFeedProduct($first_name, $last_name, $email, $mdp, $phone_number, $date_of_birth, $licence_seniority, $departure_date, $arrival_date) {
        $user = new User();
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->email = $email;
        $user->phone_number = $phone_number;
        $user->date_of_birth = $date_of_birth;
        $user->licence_seniority = $licence_seniority;
        $user->departure_date = $departure_date;
        $user->arrival_date = $arrival_date;
        $user->role = 0;
        // $user->setPassword($mdp);
        return $user;
    }
    
    public function setPassword($mdp) {
        $this->mdp = hash('sha256', $mdp);
        return $this->mdp;
    }
    
    public function verifyPassword($mdp) {
        return (hash('sha256', $mdp) === $this->mdp);
    }
}