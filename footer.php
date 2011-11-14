<?php $mb_footer_include = stripslashes(get_option('mb_footer_include')); ?>
<footer>
    <p>
    <sup>&#169; <?php echo date('Y'); ?></sup> <img src="<?php bloginfo('template_directory'); ?>/images/gimmemarFooter.png" title="gimmemar" alt="gimmemar" />
    
    </p>
   

</footer>

	<?php echo $mb_footer_include; ?>
<?php wp_footer(); ?>
<script type="text/javascript">var switchTo5x=true;</script><script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'fc3322d7-571e-4a94-a0e0-003095268a02'});</script>
</body>
 
</html>