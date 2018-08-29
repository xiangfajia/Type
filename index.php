<?php
/**
 * Hello , 2018 !!!
 * 
 * @package 
 * @author 想法家
 * @version 1.1
 * @link http://xiangfajia.cn
 */

 $this->need('header.php');
 ?>
<header>

<div class="headerCent now">

    <a href="<?php $this->options->siteUrl(); ?>now.html"><img src="<?php $this->options->themeUrl('static/image/t.jpeg'); ?>"></a>
    <div class="separator"></div>
</div>

</header>
<main id="main">
    <ul class="postList">
    <li class="postListTitle">All Posts</li>
	<?php while($this->next()): ?>
    <li itemscope="itemscope" itemtype="http://schema.org/Article">
    <h2 class="listPostTitle" itemprop="name headline"><a href="<?php $this->permalink() ?>" itemprop="url"><?php $this->title() ?></a></h2>
    <time class="listPostData" datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date("M d, Y "); ?></time></li>
	<?php endwhile; ?>
    </ul>
</main>





<?php $this->need('footer.php'); ?>
