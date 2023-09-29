<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost = [];

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
} 
?>
<main id="post-container">
    <div class="content-container">
        <hi id="main-title"><?= $currentPost['title']?></hi>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?=$currentPost['img']?>" alt="<?= $currentPost['title']?>">
        </div>
        <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, neque nostrum a ea qui perspiciatis quas nobis molestias rem, amet numquam quos nemo itaque. Possimus deserunt saepe similique voluptatibus ratione.
        Accusamus harum quis inventore placeat quas quam nobis odit labore, consequuntur ipsa rem laudantium quaerat temporibus earum sed incidunt sint porro voluptates voluptatem sunt suscipit blanditiis. Excepturi, dolor laborum. Sed!
        Corporis, reiciendis obcaecati, mollitia quae nostrum quibusdam quidem, perferendis provident rerum reprehenderit dolor deserunt ipsa cum tempora. Sequi numquam dolor laudantium voluptates illum, consectetur ratione accusantium voluptatem enim laborum et.
        Quasi dicta alias hic mollitia eos, vitae aliquam veniam id illo cum voluptatum cupiditate doloremque ad eaque beatae quidem ipsa inventore minus impedit nostrum, placeat saepe possimus aut voluptatibus. Mollitia.
        Sit veniam, blanditiis amet accusantium perferendis eligendi cupiditate delectus, culpa cumque dolores molestias quia pariatur, impedit provident ipsam ipsa! Repellat facere deleniti nihil! Recusandae eveniet, voluptatem beatae praesentium ea impedit. 
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, neque nostrum a ea qui perspiciatis quas nobis molestias rem, amet numquam quos nemo itaque. Possimus deserunt saepe similique voluptatibus ratione.
        Accusamus harum quis inventore placeat quas quam nobis odit labore, consequuntur ipsa rem laudantium quaerat temporibus earum sed incidunt sint porro voluptates voluptatem sunt suscipit blanditiis. Excepturi, dolor laborum. Sed!
        Corporis, reiciendis obcaecati, mollitia quae nostrum quibusdam quidem, perferendis provident rerum reprehenderit dolor deserunt ipsa cum tempora. Sequi numquam dolor laudantium voluptates illum, consectetur ratione accusantium voluptatem enim laborum et.
        Quasi dicta alias hic mollitia eos, vitae aliquam veniam id illo cum voluptatum cupiditate doloremque ad eaque beatae quidem ipsa inventore minus impedit nostrum, placeat saepe possimus aut voluptatibus. Mollitia.
        Sit veniam, blanditiis amet accusantium perferendis eligendi cupiditate delectus, culpa cumque dolores molestias quia pariatur, impedit provident ipsam ipsa! Repellat facere deleniti nihil! Recusandae eveniet, voluptatem beatae praesentium ea impedit.</p>
    </div>
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
</main>
<?php
    include_once("templates/footer.php");
?>