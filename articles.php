<?php 
    require __DIR__ . '/config.php';
    require __DIR__ . '/templates/header.php'; 
    require __DIR__ . '/src/article.fn.php'; 
    $article = getArticles($pdo); 
    var_dump($article);
?>
<h1>Articles</h1>
<?php
    foreach ($article as $article) { ?>
    <section>
        <h2><?= $article['title']?></h2>
        <p><?= $article['description']?></p>
        <p>
            <?= $article['content']?>
        </p>
    </section>
    <?php } ?>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id
    placerat odio. Aliquam in eros id sem ultricies pharetra at eu
    tortor. Etiam viverra, erat vel imperdiet sollicitudin, dui
    justo ornare libero, id blandit velit neque id arcu. Donec
    consequat nisi vestibulum ultricies malesuada. Ut vehicula
    consequat enim, quis accumsan massa luctus vel. In hac habitasse
    platea dictumst. Mauris accumsan nibh mi, et condimentum enim
    facilisis sed. Sed cursus erat leo, nec adipiscing eros at.
</p>
<?php require __DIR__ . '/templates/footer.php'; ?>

