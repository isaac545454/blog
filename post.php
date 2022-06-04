<?php
    include_once("template/header.php");
    if(isset($_GET['id'])){
      $postid = $_GET['id'];
      $currentpost;
      foreach($posts as $post){
         if($post['id'] == $postid){
             $currentpost = $post;
         }
      }
    }
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentpost['title'] ?></h1>
        <p id="post-description"><?= $currentpost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentpost["img"] ?>" 
             alt="<?= $currentpost['title'] ?>">
        </div>
        <p class="post-content">lLorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, explicabo provident, voluptatum, veniam nihil repellat eveniet quae adipisci exercitationem quos minus corrupti placeat veritatis architecto excepturi laudantium nulla tenetur cupiditate.
      Odit saepe voluptas voluptates, iusto minima dolore deleniti corporis itaque, rem facere inventore in sed cumque voluptatibus unde! Assumenda nam aspernatur eveniet id illo inventore ratione laboriosam iusto culpa provident.
      Nam blanditiis autem fugiat officiis animi, adipisci consequuntur minima. Mollitia atque iste sapiente quod pariatur necessitatibus minus voluptatem rerum eos modi enim perspiciatis provident ducimus, iure nostrum nobis eum iusto.
      Perspiciatis sed numquam animi quae assumenda nesciunt voluptatibus rem! Deserunt, quae ex, pariatur nemo eveniet ipsam delectus aperiam aut quas blanditiis repellat quibusdam debitis sequi odit nostrum? Dolores, iure quam!
      Beatae vel corrupti laborum repudiandae, placeat neque officiis odit provident reiciendis ducimus amet rem. Exercitationem similique itaque labore asperiores quasi officia aspernatur quas soluta quos. Quasi aliquam in laboriosam illum.
        </p>
     <p class="post-content">lLorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, explicabo provident, voluptatum, veniam nihil repellat eveniet quae adipisci exercitationem quos minus corrupti placeat veritatis architecto excepturi laudantium nulla tenetur cupiditate.
      Odit saepe voluptas voluptates, iusto minima dolore deleniti corporis itaque, rem facere inventore in sed cumque voluptatibus unde! Assumenda nam aspernatur eveniet id illo inventore ratione laboriosam iusto culpa provident.
      Nam blanditiis autem fugiat officiis animi, adipisci consequuntur minima. Mollitia atque iste sapiente quod pariatur necessitatibus minus voluptatem rerum eos modi enim perspiciatis provident ducimus, iure nostrum nobis eum iusto.
      Perspiciatis sed numquam animi quae assumenda nesciunt voluptatibus rem! Deserunt, quae ex, pariatur nemo eveniet ipsam delectus aperiam aut quas blanditiis repellat quibusdam debitis sequi odit nostrum? Dolores, iure quam!
      Beatae vel corrupti laborum repudiandae, placeat neque officiis odit provident reiciendis ducimus amet rem. Exercitationem similique itaque labore asperiores quasi officia aspernatur quas soluta quos. Quasi aliquam in laboriosam illum.
        </p>
    </div>
    <aside id="nav-container">
    <h3 id="tags-title">tags</h3>
    <ul class="tag-list">
                   <?php foreach($currentpost['tags'] as $tag): ?>
                   <li><a href="#"><?= $tag ?></a></li>
                    <?php  endforeach; ?>
    </ul>
   <h3 id="categories-title">categorias</h3>
   <ul id="categories-list">
        <?php foreach($categories as $categoriy): ?>
        <li><a href="#"><?= $categoriy ?></a></li>
       <?php  endforeach; ?>
   </ul>
</aside>
</main>

<?php
    include_once("template/footer.php")
?>