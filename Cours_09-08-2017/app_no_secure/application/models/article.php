<?php
	namespace app\md;
	use app\md\Article as Article;
	use \PDO;
	use \core\Model;
	use \core\Flash;


	class Article extends Model {
        
             
        /**
        * @description =  Select all posts 
        * @Return Array of Objects
        */  
		public function all(){

			$sql = "
				SELECT 
					A.id,
					A.titre,
					A.contenu,
					A.createdAt,
					U.pseudo 
				FROM article AS A
				JOIN User AS U ON A.user_id =  U.id
				ORDER BY A.createdAt DESC
			";
			$req =  $this->pdo->query($sql);
			return $req->fetchAll(PDO::FETCH_OBJ);

		}

		public function allBy($id){

			$sql = "
				SELECT 
					A.id,
					A.titre
				FROM article AS A
				JOIN User AS U ON A.user_id =  U.id
				AND U.id = $id 
			";
			$req =  $this->pdo->query($sql);
			return $req->fetchAll(PDO::FETCH_OBJ);
		}

		public function insert(){
			$titre = $_POST['titre'];
			$contenu = $_POST['contenu'];
			$id = $_SESSION['auth']['id'];
			$sql = "
			INSERT INTO article (titre, contenu, createdAt, user_id)
			VALUES('$titre', '$contenu', NOW(), '$id'); 
			"; 
			$req = $this->pdo->exec($sql);
		}

		public function one($id){
			$sql = "
			SELECT 
				A.id,
				A.titre,
				A.contenu 
			FROM article AS A
			WHERE id = $id
			";
			$req = $this->pdo->query($sql);
			return $req->fetch(PDO::FETCH_OBJ);
		}

		public function update(){
			$titre = $_POST['titre'];
			$contenu = $_POST['contenu'];
            $id = $_POST['id'];
            $sql = "
                	UPDATE article 
                	SET titre = :titre, contenu= :contenu
                	WHERE id= :id;
                ";
            $pre = $this->pdo->prepare($sql);
            $res = $pre->execute(array(':titre' => $titre, ':contenu' => $contenu, ':id'=> $id));
            echo "<br>".$res;
		}

		public function delete($id){
            $sql = "
                DELETE FROM article
                WHERE id='$id';
                ";
            $req = $this->pdo->query($sql); 
		}

		public function show($id){
			$sql = "
			SELECT 
				A.id,
				A.titre,
				A.contenu,
				U.pseudo 
			FROM article AS A
			JOIN User AS U ON A.user_id = U.id
			WHERE A.id = $id
			";
			$req = $this->pdo->query($sql);
			return $req->fetch(PDO::FETCH_OBJ);
		}

		public function limit($page = 0, $nb){
			$sql = "
				SELECT 
					A.id,
					A.titre,
					A.contenu,
					A.createdAt,
					U.pseudo 
				FROM article AS A
				JOIN User AS U ON A.user_id =  U.id
				ORDER BY A.createdAt DESC
				LIMIT $page, $nb 
			";
			$req =  $this->pdo->query($sql);
			return $req->fetchAll(PDO::FETCH_OBJ);
		}

		public function count(){
			$sql = "
				SELECT COUNT(*)
				FROM article 
			";
			$req = $this->pdo->query($sql);
			return intval($req->fetchColumn());
		}
	}