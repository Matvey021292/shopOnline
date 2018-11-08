<li class="active"><a data-curr="<?php echo $k; ?>" href="/currency/change?curr=<?php echo $this->currency['code']; ?>"><i class="icon-h-59"></i><?php echo $this->currency['code']; ?></a></li>
<?php foreach ($this->currencies as $k => $v) { ?>
    <?php if ($k != $this->currency['code']) { ?>
        <li><a data-curr="<?php echo $k; ?>" href="/currency/change?curr=<?php echo $k; ?>"><i class="icon-h-60"></i><?php echo $k; ?></a></li>
    <?php } ?>
<?php } ?>
