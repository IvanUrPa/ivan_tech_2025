<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="search-label">
        <input 
            type="search" 
            class="search-field" 
            placeholder="<?php echo esc_attr_x('Buscar...', 'placeholder'); ?>" 
            value="<?php echo get_search_query(); ?>" 
            name="s"
        />
        <button type="submit" class="search-submit" aria-label="Buscar">
    <i class="fa fa-search"></i>
</button>
    </label>
</form>