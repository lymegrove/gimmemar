<form class="searchform" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    
        <input class="searchfield" type="text" value="" name="s" id="s" type="text" value="Search..." onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" />
        <input class="searchbutton" type="submit" id="searchsubmit" value="Go" />
    
</form>