<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block clearfix">






<div class="AreaL">

<?php echo $this->fetch('library/category_tree2.lbi'); ?>
     
<?php echo $this->fetch('library/new_articles.lbi'); ?>



    
  </div>



<div class="AreaR">

 
<?php echo $this->fetch('library/index_ad.lbi'); ?>
 
 


<?php echo $this->fetch('library/recommend_new.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_25']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_25']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php echo $this->fetch('library/recommend_best.lbi'); ?>
<?php echo $this->fetch('library/promotion_info.lbi'); ?>

</div> 

 
 
  
    <div class="blank"></div> 
 
  
  <div class="goodsBox_1">
  
  
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>
<?php $this->assign('ads_id','1'); ?><?php $this->assign('ads_num','10'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_12']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_12']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_40']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_40']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_8']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_8']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_9']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_9']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_7']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_7']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_11']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_11']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_24']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_24']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_23']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_23']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_16']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_16']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

  </div> 
  
    </div>
  
  
  
 


    <?php echo $this->fetch('library/help.lbi'); ?>
 

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
