<div class="slider">
  <div>
    <img src="<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto1'); ?>" alt="foto1"/>
    <?php if ($cc == 1) { ?><div class="slideLeft"><div class="caption"><?php echo $this->params->get('capition1'); ?></div></div><?php } ?>
  </div>
  <div>
    <img src="<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto2'); ?>" alt="foto1"/>
   <?php if ($cc == 1) { ?><div class="slideRight"><div class="caption"><?php echo $this->params->get('capition2'); ?></div></div><?php } ?>
  </div>
  <div>
    <img src="<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto3'); ?>" alt="foto1"/>
     <?php if ($cc == 1) { ?><div class="slideLeft"><div class="caption"><?php echo $this->params->get('capition3'); ?></div></div><?php } ?>
  </div>
   <div>
    <img src="<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto4'); ?>" alt="foto1"/>
      <?php if ($cc == 1) { ?><div class="slideRight"><div class="caption"><?php echo $this->params->get('capition4'); ?></div></div><?php } ?>
  </div>
   <div>
    <img src="<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto5'); ?>" alt="foto1"/>
    <?php if ($cc == 1) { ?> <div class="slideLeft"><div class="caption"><?php echo $this->params->get('capition5'); ?></div></div><?php } ?>
  </div>
</div>


