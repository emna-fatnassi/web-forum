<?php
    require_once '../../config.php';
    require_once '../../Model/question.php';
    class questionC{
        
        public function listQuestions(){
    
            if(isset($_GET['search']) AND !empty($_GET['search'])){
        
                $usersSearch = $_GET['search'];
                $sql = 'SELECT * FROM questions WHERE titre LIKE "%'.$usersSearch.'%" ORDER BY idQuestion DESC';
                $pdo = config::getConnexion();
                try{
                    $list = $pdo->prepare($sql);
                    $list->execute();
                    $result = $list->fetchAll();
                    return $result;
                }
                catch(Exception $e){
                    die('Erreur: '.$e->getMessage());
                }
            }
            else{
                $sql = 'SELECT * FROM `questions` ORDER BY idQuestion DESC';
                $pdo = config::getConnexion();
                try{
                    $list = $pdo->prepare($sql);
                    $list->execute();
                    $result = $list->fetchAll();
                    return $result;
                }
                catch(Exception $e){
                    die('Erreur: '.$e->getMessage());
                }
            }
        }
      
        
        public function reportQ(int $idQuestion)
        {
            $pdo = config::getConnexion();
            $list = $pdo->prepare("SELECT COUNT(r.idReport) FROM questions q LEFT JOIN reports r ON q.idQuestion = r.idQuestion WHERE q.idQuestion = :id;");
            $list->bindValue(':id', $idQuestion, PDO::PARAM_INT);
            $list->execute();
            $reportCount = $list->fetchColumn();
            if($reportCount > 2)
            {
                $sql = 'DELETE FROM `questions` WHERE idQuestion = '.$idQuestion.'';
                $list = $pdo->prepare($sql);
                $list->execute();
                $result = $list->fetchAll();
                return $result;
            }
        }
        
        
        public function delete(int $idQuestion){
            $sql = 'DELETE FROM `questions` WHERE idQuestion = '.$idQuestion.'';
            $pdo = config::getConnexion();
            try{
                $list = $pdo->prepare($sql);
                $list->execute();
                echo $list->rowCount() ."records deleted successfully";
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }

        public function createQuestion($question){
            try {
                $pdo = config::getConnexion();
                $sql = 'INSERT INTO `questions`(`titre`, `contenu`, `id_auteur`, `date_publication`) VALUES (?, ?, ?, ?)';
                $list = $pdo->prepare($sql);
                $titre=$question->getTitre();
                $list->bindParam(1,$titre);
                $contenu=$question->getContenu();
                $contenue = nl2br(htmlspecialchars($contenu));
                $list->bindParam(2,$contenue);
                $id_auteur = $question->getId_auteur();
                $list->bindParam(3,$id_auteur);
                $date_publication = $question->getDate_publication();
                $list->bindParam(4,$date_publication);
                $list->execute();
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }

        public function findQuestion(int $idQuestion){
            $pdo = config::getConnexion();
            $sql = 'SELECT * FROM `questions` WHERE idQuestion = '.$idQuestion.'';
            $list = $pdo->prepare($sql);
            try{
                $list = $pdo->prepare($sql);
                $list->execute();
                return $list->fetch();
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }

        public function findQuestionByTitle(string $titre){
            $pdo = config::getConnexion();
            $sql = 'SELECT * FROM `questions` WHERE titre = '.$titre.'';
            $list = $pdo->prepare($sql);
            try{
                $list = $pdo->prepare($sql);
                $list->execute();
                return $list->fetch();
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }

        public function updateQuestion($question,$idQuestion){
            try{
            $pdo = config::getConnexion();
            $sql = 'UPDATE `questions` SET `titre`= :titre,`contenu`=:contenu,`id_auteur`=:id_auteur,`date_publication`=:date_publication WHERE idQuestion=:idQuestion';
            $list = $pdo->prepare($sql);
            $titre= $question->getTitre();
            $contenu=$question->getContenu();
            $contenue = nl2br(htmlspecialchars($contenu));
            $id_auteur=$question->getId_auteur();
            $date_publication=$question->getDate_publication();
            $list->execute([
                'titre' => $titre,
                'contenu' => $contenue,
                'id_auteur' => $id_auteur,
                'date_publication' => $date_publication,
                'idQuestion'=>$idQuestion
            ]);
            echo $list->rowCount()."records Updated successfully";
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }
        public function censorBadWords($string) {
            $badWordsFile = 'C:/xampp/htdocs/projet/Controller/Bad.txt';
            $file = fopen($badWordsFile, 'r');
            if (!$file) {
                echo "Erreur lors de l'ouverture du fichier $badWordsFile";
            } else {
            $badWords = file($badWordsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            if ($badWords === false) {
                // erreur lors de l'ouverture du fichier
                return $string;
            }
            $words = explode(' ', $string); 
            foreach ($words as $key => $word) {
                if (in_array(strtolower($word), $badWords)) { 
                    $words[$key] = str_repeat('*', strlen($word));
                }
            }
            return implode(' ', $words);
        }
        }
        
        
    }
?>