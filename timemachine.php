<?php

/**
 * 时光机
 * @package custom
 * Author: Veen Zhao & pyrroleach
 * CreateTime: 2020/9/6 15:38
 */
$this->need('base/head.php');
$this->need('base/nav.php');
$this->comments()->to($comments);
?>
<?php function threadedComments($comments, $options)
{
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
    <div id="li-<?php $comments->theId(); ?>" class=" comment-body<?php if ($comments->levels > 0) {
                                                                        echo ' comment-child';
                                                                        $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
                                                                    } else {
                                                                        echo ' comment-parent';
                                                                    }
                                                                    $comments->alt(' comment-odd', ' comment-even');
                                                                    echo $commentClass;
                                                                    ?>">

        <div class="commentlist">
            <div class="comment" id="li-<?php $comments->theId(); ?>">
                <div id="<?php $comments->theId(); ?>">
                    <div class="comment-avatar"><img alt="" src="<?= App::avatarQQ($comments->mail); ?>s=100" class="avatar avatar-96 photo" height="96" width="96" style="display: inline;"></div>
                    <div class="comment-body">
                        <div class="comment_author">
                            <span class="name"><?php $comments->author(); ?></span>
                            <em><?php $comments->date('Y-m-d | H:i'); ?></em>
                        </div>
                        <div class="comment-text">
                            <?php $comments->content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if ($this->allow('comment')) : ?>
        <div id="<?php $this->respondId(); ?>" class="respond list-content mx-auto mt-5">
            <div class="list-top">
                <?php if ($comments->have()) : ?>
                    <h5 class="loveList-title" style="display:block;text-align:center;margin-bottom:30px;"><a href="<?php Helper::options()->siteUrl() ?>"><?php $this->commentsNum(_t('暂无说说'), _t('仅有一条说说'), _t('累计发布了<span class="bigfontNum"> %d </span>条说说')); ?></a></h5>
                    <?php $comments->listComments(); ?>
                    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
                <?php endif; ?>
                <form method="post" action="<?php $this->commentUrl() ?>" name="comment-form" id="comment-form" role="form" class="comment-form">
                    <!--<?php if ($this->user->hasLogin()) : ?>-->
                        <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>.
                            <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a>
                        </p>
                          <div class="form-group">
                        <textarea rows="3" cols="50" name="text" id="textarea" class="form-control" style="background-image:none;"placeholder="<?php _e('青春岁月里，满满都是你'); ?>" required><?php $this->remember('text'); ?></textarea>
                    </div>
                    <div class="form-group" style="margin-bottom:35px;">
                        <button type="submit" class="float-right btn btn-outline-danger" ><?php _e('发布说说'); ?></button>
                    <?php $comments->smilies(); ?>
                    </div>
                    <!--<?php endif; ?>-->
                </form>
            </div>
        </div>
    <?php else : ?>
        <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
    <?php $this->need('base/footer.php'); ?>
