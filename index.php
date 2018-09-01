<?php
/**
 * Clean, modern and stylish Typecho theme
 * 
 * @package 
 * @author 想法家
 * @version 1.1 
 * @link http://xiangfajia.cn
 */

 $this->need('header.php');
 ?>
<header>

<div class="headerCent">
    <?php if ($this->options->avatarUrl): ?>
    <a href="<?php $this->options->avatarUrl(); ?>"><?php $this->author->gravatar('75'); ?></a>
    <?php else: ?>
    <?php $this->author->gravatar('75'); ?>
    <?php endif; ?>
    <div class="separator"></div>
</div>

</header>
<main id="main">
    <ul class="postList">
    <li class="postListTitle">最新文章</li>
	<?php while($this->next()): ?>
    <li itemscope="itemscope" itemtype="http://schema.org/Article">
    <h2 class="listPostTitle" itemprop="name headline"><a href="<?php $this->permalink() ?>" itemprop="url"><?php $this->title() ?></a></h2>
    <time class="listPostData" datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date("M d, Y "); ?></time></li>
	<?php endwhile; ?>
    </ul>
    <div class="more"><a href="<?php $this->options->siteUrl(); ?>archive.html" title="阅读全部文章"><i class="iconfont icon-right"></i></a></div>
</main>





<?php $this->need('footer.php'); ?>
