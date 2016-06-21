<?php
function nettoyage($value){
return trim(strip_tags($value));
}

function clean($assArr) {
	foreach ($assArr as $key => $value)
	{
		$assArr[$key] = nettoyage($value);
	}
	return $assArr;
}


function regex($subject, $pattern){
	preg_match($pattern, $subject);
}



//feed



function list_products($connexion){

$query = 'SELECT * FROM products ORDER BY id';
$preparedStatement = $connexion->prepare($query);
$preparedStatement->execute();
return $result = $preparedStatement->fetchAll(PDO::FETCH_ASSOC); 
}

// function list_user_by_id($connexion, $id){
// $query = 'SELECT * FROM users WHERE id = :id';
// $preparedStatement = $connexion->prepare($query);
// $preparedStatement->bindValue(":id", $id);
// $preparedStatement->execute();

// return $preparedStatement->fetchAll(PDO::FETCH_ASSOC); 
//  }
// function post_user($connexion, $name){

// $query = "INSERT INTO users (name) VALUES (:name)";

// $preparedStatement = $connexion->prepare($query);
// $preparedStatement->bindValue(':name', $name);
// return $result = $preparedStatement->execute();
// }

// function delete_user($connexion, $id){

// $query = 'DELETE FROM users WHERE id = :id';

// $preparedStatement = $connexion->prepare($query);
// $preparedStatement->bindValue(':id', $id);
// return $result = $preparedStatement->execute();
// }

// function put_user($connexion, $name, $id){

// $query = "UPDATE users SET name = :name WHERE id = :id";

// $preparedStatement = $conneexion->prepare($query);
// $preparedStatement->bindValue(':name', $name);
// $preparedStatement->bindValue(':id', $id);
// return $result = $preparedStatement->execute();
// }



// $connexion->lastInsertId()


