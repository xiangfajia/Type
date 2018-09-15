<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<script>function tg_c(id,nc){var e=document.getElementById(id);var c=e.className;if(!c){e.className=nc}else{var classArr=c.split(' ');var exist=false;for(var i=0;i<classArr.length;i++){if(classArr[i]===nc){classArr.splice(i,1);e.className=Array.prototype.join.call(classArr," ");exist=true;break}}if(!exist){classArr.push(nc);e.className=Array.prototype.join.call(classArr," ")}}}</script>
<?php function threadedComments($comments, $options) {
    $cl = $comments->levels > 0 ? 'comment' : 'comment';
    $author = $comments->url ? '<a href="' . $comments->url . '"'.'" target="_blank"' . ' rel="external">' . $comments->author . '</a>' : $comments->author;
?>
<li id="li-<?php $comments->theId();?>" class="<?php echo $cl;?>">
<div id="<?php $comments->theId(); ?>">
<?php $a = '//secure.gravatar.com/avatar/' . md5(strtolower($comments->mail)) . '?s=80&r=X&d=mm';?>
    <img class="avatar" src="<?php echo $a ?>" alt="<?php echo $comments->author; ?>" />
    <div class="commenBox">
    <div class="commentName"><span class="commentNameSpan"><?php echo $author ?></span></div>
    <div class="commentContent"><?php $comments->content(); ?></div>
    <div class="commentInfo"><?php $comments->dateWord(); ?><span class="commentReply"><?php $comments->reply(); ?></span></div>
    </div>
</div>
<?php if ($comments->children){ ?><div class="children"><?php $comments->threadedComments($options); ?></div><?php } ?>
</li>
<?php } ?>
<div id="comments">
<?php $this->comments()->to($comments); ?>
<?php if ($comments->have()): ?>
    <h5 class="responses-title"><?php $this->commentsNum(_t('暂无评论'), _t('Comments : 1'), _t('Comments : %d')); ?></h5>
    <?php $comments->listComments(); ?><?php $comments->pageNav('&laquo;', '&raquo;'); ?>
<?php endif; ?>
<div id="<?php $this->respondId(); ?>" class="respond">
    <div class="Cancelreply"><?php $comments->cancelReply(); ?></div>
    <h5 class="response">发表留言</h5>
<form method="post" action="<?php $this->commentUrl() ?>" role="form">
<?php if($this->user->hasLogin()): ?>
    <span>已登入<a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout">退出 &raquo;</a></span>
<?php else: ?>
    <?php if($this->remember('author',true) != "" && $this->remember('mail',true) != "") : ?>
        <span class="getyouinfo">欢迎<?php $this->remember('author'); ?>回来 · <small style="cursor: pointer;" onclick = "tg_c('ainfo','hinfo');">修改资料</small></span>
        <div id ="ainfo" class="ainfo hinfo">
    <?php else : ?>
        <div class="ainfo">
        <?php endif ; ?>
        <div class="form-input-box">
        <div class="form-input">
        <input type="text" name="author" id="author" class="contents-input" placeholder="称呼 *" value="<?php $this->remember('author'); ?>" required></div>
        <div class="form-input"><input type="email" name="mail" id="mail" class="contents-input" placeholder="邮箱 *" value="<?php $this->remember('mail'); ?>" <?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>></div>
        <div class="form-input url"><input type="url" name="url" id="url" class="contents-input" placeholder="网址" value="<?php $this->remember('url'); ?>" <?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?>></div>
        </div>
        </div>
    <?php endif; ?>
    <div class="textareaBox"><textarea name="text" id="textarea" class="ci" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};" placeholder="请在这里输入你的评论内容" required ><?php $this->remember('text',false); ?></textarea></div>
    <div class="clearfix">
    <button type="submit" class="submit" id="submit">发布留言</button></div>
</form>
</div>
</div>