<div class="list-group sticky-top position-right pt-5 top-5 bg-dark text-light w-25">
    <?php foreach ($categories as $category) { ?>
        <a href="?page=category&slug=<?=$category['slug']?>" class="list-group-item list-group-item-action"><?= $category['name'];?></a>
    <?php } ?>
</div>