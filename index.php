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
    <li>
    <h2 class="listPostTitle"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
    <span class="listPostData"><?php $this->date("M d, Y "); ?></span></li>
	<?php endwhile; ?>
    </ul>
</main>





<?php $this->need('footer.php'); ?>
