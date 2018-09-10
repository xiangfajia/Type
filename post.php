<?php $this->need('header.php'); ?>

<mian id="main">
    <article class="post" itemscope itemtype="https://schema.org/Article">
        <h1 class="postTitle" itemprop="name headline"><?php $this->title() ?></h1>
        <div class="postContent">
        <?php $this->content(); ?>
        </div>
        <a href="<?php $this->options->siteUrl(); ?>" class="homePage" rel="nofollow">« BEFORE</a>
    </article>
</mian>
<?php $this->need('footer.php'); ?>