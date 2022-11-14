<?php
function getArticles(PDO $pdo, $limit = 4) {
    $sql = "SELECT * FROM article LIMIT :limit";
    $req = $pdo->prepare($sql);
    $req->bindValue(':limit', $limit, PDO::PARAM_INT);
    $req->execute();

    return $req->fetchAll();
} 
//$article = getArticles();