<?php

/**
 * 主题首页
 * @package custom
 * Author: Veen Zhao
 * CreateTime: 2021/2/6 22:32
 */
$this->need('base/head.php');
$this->need('base/nav.php');
?>
<div class="container">
    <div class=" text-center my-5 py-2">
        <h5 class="lover-card-title">今天是我们相识的</h5>
        <h5 id="meet_runtime" style="color:#3B3838 !important;margin-bottom:10px!important;"></h5>
        <h5 class="lover-card-title">也是我们在一起的</h5>
        <h5 id="site_runtime" style="color:#3B3838 !important;margin-bottom:10px!important;"></h5>
        <h5 class="lover-card-title"><?php $this->options->anniversary() ?></h5>
        <h5 id="<?php $this->options->anniversary() ?>" style="color:#3B3838 !important;"></h5>
    </div>
    <div class="row indexPlate" >
        <div class="col-md-4">
            <a href="<?php $this->options->aboutPageLink() ?>" class="card home-card">
                <div class="card-body" >
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar avatar-md">
                                <img src="<?php $this->options->aboutPageIcon() ?>" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <p class="h5" style="font-family:FangzhengKT;color:#3B3838;">关于</p>
                            <p class="small text-muted mb-1" style="font-family:FangzhengYMZ;">💑我们的经历</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="<?php $this->options->timemachinePageLink() ?>" class="card home-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar avatar-md">
                                <img src="<?php $this->options->timemachinePageIcon() ?>" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <p class="h5"style="font-family:FangzhengKT;color:#3B3838;">时光机</p>
                            <p class="small text-muted mb-1" style="font-family:FangzhengYMZ;">🕖你言我语</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="/index.php/blog/" class="card home-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar avatar-md">
                                <img src="<?php $this->options->timePageIcon() ?>" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <p class="h5" style="font-family:FangzhengKT;color:#3B3838;">点点滴滴</p>
                            <p class="small text-muted mb-1" style="font-family:FangzhengYMZ;">💖记录你我生活</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="<?php $this->options->albumPageLink() ?>" class="card home-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar avatar-md">
                                <img src="<?php $this->options->albumPageIcon() ?>" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <p class="h5" style="font-family:FangzhengKT;color:#3B3838;">相册</p>
                            <p class="small text-muted mb-1" style="font-family:FangzhengYMZ;">🖼️留住你我回忆</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="<?php $this->options->loveListPageLink() ?>" class="card home-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar avatar-md">
                                <img src="<?php $this->options->loveListPageIcon() ?>" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <p class="h5" style="font-family:FangzhengKT;color:#3B3838;">Love List</p>
                            <p class="small text-muted mb-1" style="font-family:FangzhengYMZ;">📜甜蜜瞬间有你陪伴</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="<?php $this->options->blessingPageLink() ?>" class="card home-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar avatar-md">
                                <img src="<?php $this->options->blessingPageIcon() ?>" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <p class="h5"style="font-family:FangzhengKT;color:#3B3838;">祝福板</p>
                            <p class="small text-muted mb-1" style="font-family:FangzhengYMZ;">💌写下对我们的祝福</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<script src="/usr/themes/Brave/botui/vue.min.js"></script>
<script src="/usr/themes/Brave/botui/botui.min.js"></script>
<script src="/usr/themes/Brave/botui/botui.js"></script>
<?php $this->need('base/footer.php'); ?>