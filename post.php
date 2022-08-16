<?php

    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }

        }

    }

?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati tenetur deleniti id animi facere dolor? Repellat tempora nostrum earum est ratione expedita delectus molestias, rem voluptatibus dolorum voluptates exercitationem aspernatur.
            Ratione facere cumque ut voluptatem, praesentium inventore velit esse? Nostrum non quos rerum necessitatibus? Laudantium iste quam quas molestias voluptatum reiciendis? Nesciunt pariatur delectus ratione officiis similique, nisi facere perferendis.
            Voluptate dicta delectus ducimus modi, sint incidunt earum praesentium quod voluptates et dolorum quas beatae consectetur provident nulla aliquid inventore alias distinctio placeat ratione. Perferendis laborum in dolorem minima sed.
            Ut officiis quae qui sint eveniet ad vitae enim, modi sunt reiciendis magnam aspernatur temporibus? Fugiat modi debitis obcaecati dolorem impedit rerum dicta nam mollitia dignissimos, perspiciatis sed. Voluptatum, eaque?
            Sequi ratione, totam magnam dignissimos natus odit vitae temporibus quis sit rerum aspernatur architecto nihil, eveniet error, aperiam eligendi blanditiis saepe eos quidem esse tenetur vero mollitia. Mollitia, repellat rerum.
            Illo in officiis facilis. Blanditiis officiis totam, quidem odio earum dolorum iure pariatur facilis? Debitis ab eos nemo hic. Eligendi vero exercitationem rerum amet magni nihil aperiam earum vel illo.
            Tempore animi maxime pariatur perferendis laborum, est nemo quibusdam facilis corrupti, architecto quisquam suscipit et, consectetur atque nobis a eligendi obcaecati eveniet impedit in? Laudantium voluptate deleniti et. Delectus, eveniet?
            Perferendis, quidem quisquam adipisci delectus culpa atque odit dicta vero impedit aperiam doloribus sapiente. Porro quidem quisquam facilis optio adipisci atque molestias impedit eveniet totam. Saepe assumenda cupiditate officiis explicabo?
            Tempore laboriosam deserunt qui magni necessitatibus nesciunt sequi beatae obcaecati, dignissimos, doloremque repellendus labore dolores eligendi cum ab distinctio vitae natus ex, aperiam dolorum libero ipsam vel. Quo, deleniti ducimus!
            Reiciendis maiores vitae ullam quia sint, omnis numquam architecto fugit optio dolorum dolore aperiam sunt natus possimus et aut temporibus deserunt cupiditate quasi eligendi consequuntur nulla! Cum eligendi non qui?</p>
        </div>
    </main>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categories</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>

<?php

include_once("templates/footer.php");

?>