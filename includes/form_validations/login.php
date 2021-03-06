<?php

function validate_login($input){
    $errors = [];

    $error_msg = "Something went wrong";

    if(!isset($input["username"])|| !isset($input["password"])|| !isset($input["role"])){
        $errors['login'] = $error_msg;
    }

    if(!empty($errors)) return $errors;

    $user = false;
    
    if($input['role'] === "student"){
        $user = get_student_by_username($input["username"]);
    } else if($input['role'] === "faculty"){
        $user = get_faculty_by_username($input["username"]);
    }

    if(!$user)
        $errors['login'] = $error_msg;
    else{
        $hash_password = $user[$input['role'] . "_password"];
        $password = $input["password"];
        if(!password_verify($password, $hash_password))
            $errors['login'] = $error_msg;
    }

    return $errors;
}

?>