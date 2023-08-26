<form method="GET" action="<?php echo esc_url( home_url( '/') ); ?>">
    <input class="search-field" type="text" name="s" placeholder="Buscar uma palavra" value="<?php the_search_query(); ?>" />
    <input class="search_submit" type="submit" value="Pesquisar" />
</form>