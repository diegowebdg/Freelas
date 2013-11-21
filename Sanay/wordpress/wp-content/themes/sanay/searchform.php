<?php
/**
 * The template for displaying search forms in Philips Automotive
 *
 * @package WordPress
 * @subpackage isee-comunicacao
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" class="field search" name="s" id="s" placeholder="Buscar em Update..." />
        <input type="submit" class="submit" name="submit" title="Procurar no blog..." id="searchsubmit" value="<?php esc_attr_e( '', 'isee-comunicacao' ); ?>" />
	</form>
