<?php
/*
Recap:



class UserModel{
    constructor(){
        this.users = [];
        this.lastid= 0
    }

    createUser(firstName, lastName, email){
        let newUser = {
            id:this.lastid++,
            first_name: firstName,
            last_name: lastName,
            email:email
        }

        this.users.push(newUser)
        return newUser
    }

    getUser(email){
        //return "This gets a user by email"
        return this.users.find(user => user.email === email)
    }


    updateUser(email, element){
       let user = this.getUser(email)

       for(const key in element){
        user[key] = element[key]
       }
        return user
    }


    deleteUser(email){
       // return "This deletes a user by email"
        
       this.users = this.users.filter(user => user.email !== email)

    }   




}

let newUsermodel = new UserModel;
let createNewUser = newUsermodel.createUser("Samuel", "Akinnuoye", 'Samuelldmj@yahoo.com')
let secondUser = newUsermodel.createUser("Adigun", "Alapomeji", 'Busayo@yahoo.com')
let thirdUser = newUsermodel.createUser("Shola", "Ajala", "dan@yahoo.com")
// console.log(createNewUser)
// console.log(secondUser)
// console.log(thirdUser)

//this will display the old data
//console.log(newUsermodel.users)

// let updateSamuel = newUsermodel.updateUser('Samuelldmj@yahoo.com', {first_name: 'Daniel'})
// let Samuel = newUsermodel.getUser('Samuelldmj@yahoo.com')
//console.log(updateSamuel)

//this will display the updated data first_name
//console.log(newUsermodel.users)
// //get the email at index 0
// console.log(newUsermodel.users[0].email)

//deleting by email
let deleteUser = newUsermodel.deleteUser('Samuelldmj@yahoo.com')
//console.log(deleteUser)
console.log(newUsermodel.users)


*/

class UserModel 
{

public function __construct(
    public array $users = [], 
    public int $lastid = 0
)
{
    $this->users = $users;

}


public function createUser($firstName, $lastName, $email){
     $newUser = [
        'id' => $this->lastid++,
        "first_name" => $firstName,
        "last_name" => $lastName,
        "email" =>$email
     ];
     $users = array_push($this->users, $newUser);
    return $newUser;
}

public function getUser($email)
{
    foreach($this->users as $value){
        if($value['email'] === $email){
            return $value;
        }
    }
}

public function updateUser($email, $element, $value)
{
    $userIndex = array_search($value, $this->users);
    $this->users[$userIndex][$element] = $value;
    return $this->users[$userIndex];
}

public function deleteUser($email){

}

}


$newUsermodel = new UserModel;

//creating user data
$createNewUser = $newUsermodel->createUser("Samuel", "Akinnuoye", 'Samuelldmj@yahoo.com');
$createNewUser2 = $newUsermodel->createUser("Ade", "Daniel", 'dan@gmail.com');
// print_r($createNewUser);
// print_r($createNewUser2);
// print_r($newUsermodel->users);

//getting user by email
// $samuel = $newUsermodel->getUser('Samuelldmj@yahoo.com');
// print_r($samuel);

//updating user
$updateSamuel = $newUsermodel->updateUser('Samuelldmj@yahoo.com', 'first_name', 'Abidal' );
print_r($updateSamuel);
//print_r($newUsermodel->users);


























