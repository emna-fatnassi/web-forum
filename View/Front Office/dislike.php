<?php
    require '../../Controller/voteC.php';
    $voteC = new voteC();
    if (isset ($_GET["idQuestion"])&&!empty($_GET["idQuestion"])){
        $list = $voteC->addDislike($_GET["idQuestion"],1);
        require_once '../../config.php';
        if (isset($row['idQuestion']) && !empty($row['idQuestion'])) {
        $idQuestion = $row['idQuestion'];
        $pdo = config::getConnexion();
        $res = $pdo->prepare("SELECT COUNT(*) FROM votes WHERE idQuestion = :id AND type = -1");
        $res->bindValue(':id', $idQuestion, PDO::PARAM_INT);
        $res->execute();
        $dislikesCount = $res->fetchColumn();
        }
        header('location:listQuestions.php');
    }
    else {
        echo "Error";
    }
?>