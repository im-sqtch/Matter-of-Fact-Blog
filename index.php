<?php

    include_once("templates/header.php");
    print_r($posts);

?>

    <main>
        <div id="title-container">
            <h1>Matter of Fact Blog</h1>
            <p>The tech breaking news blog</p>
        </div>
        <div id="posts-container">
            <?php foreach($posts as $post): ?>
                <div class="post-box">
                    <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="">
                </div>
            <?php endforeach; ?>
        </div>
    </main>

<?php

    include_once("templates/footer.php")

?>