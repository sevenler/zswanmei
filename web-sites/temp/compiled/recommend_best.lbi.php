<?php if ($this->_var['best_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="box  ">

 
  
  <div class="tit1 tit2">
       <span>
  <img src="themes/ecmoban_ehaier/images/tit_best.gif">
   
    </span>
        <a class="more" href="search.php?intro=best">更多</a> 
      </div>
  
  <div class="blank"></div>
  
  
  <div id="show_best_area" class="clearfix">
  <?php endif; ?>
  <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_20067600_1398657870');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_20067600_1398657870']):
?>
  <div class="goodsItem">
       
           <a href="<?php echo $this->_var['goods_0_20067600_1398657870']['url']; ?>"><img src="<?php echo $this->_var['goods_0_20067600_1398657870']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_20067600_1398657870']['name']); ?>" class="goodsimg" /></a><br />
           <p class="f1"><a href="<?php echo $this->_var['goods_0_20067600_1398657870']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_20067600_1398657870']['name']); ?>"><?php echo $this->_var['goods_0_20067600_1398657870']['short_style_name']; ?></a></p>
           
           
 
      
           本店价：<font class="f1">
           <?php if ($this->_var['goods_0_20067600_1398657870']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_0_20067600_1398657870']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_0_20067600_1398657870']['shop_price']; ?>
          <?php endif; ?>
           </font>      <font class="market"><?php echo $this->_var['goods_0_20067600_1398657870']['market_price']; ?></font> 
        </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
  <?php if ($this->_var['cat_rec_sign'] != 1): ?>
  </div>

</div>
<div class="blank"></div>
  <?php endif; ?>
<?php endif; ?>
