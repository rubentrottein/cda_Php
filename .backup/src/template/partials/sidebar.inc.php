<div id="sidebar" class="list-group sticky-top position-right bg-dark text-light">
    <?php foreach ($categories as $category) { ?>
        <a href="?page=category&slug=<?=$category['slug']?>" class="list-group-item list-group-item-action"><?= $category['name'];?></a>
    <?php } ?>
</div>