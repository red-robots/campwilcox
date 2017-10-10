<?php $boxes = get_field("boxes","option");
if($boxes):?>
    <section class="boxes">
        <?php for($i=1;$i<=count($boxes);$i++):
            $box = $boxes[$i-1];?>
            <div class="row-<?php echo $i;?> box">
                <?php if($box['title']):?>
                    <header class="js-blocks"><h2><?php echo $box['title'];?></h2></header>
                <?php endif;?>
                <?php if(($box['more_link']&&$box['more_text'])||$box['title']):?>
                    <div class="wrapper">
                        <?php if($box['links']):?>
                            <div class="links">
                                <?php foreach($box['links'] as $link):?>
                                    <div class="link">
                                        <a href="<?php echo $link['link'];?>" target="_blank">
                                            <?php echo $link['link_text'];?>
                                        </a>
                                    </div><!--.link-->
                                <?php endforeach;?>
                            </div><!--.links-->
                        <?php endif;?>
                        <?php if($box['more_link']&&$box['more_text']):?>
                            <div class="more">
                                <a href="<?php echo $box['more_link'];?>" target="_blank">
                                    <div class="wrapper">
                                        <?php echo $box['more_text'];?>
                                    </div><!--.wrapper-->
                                </a>
                            </div><!--.more-->
                        <?php endif;?>
                    </div><!--.wrapper-->
                <?php endif;?>
            </div><!--.box-->
        <?php endfor;?>
    </section><!--.col-2-->
<?php endif;?>