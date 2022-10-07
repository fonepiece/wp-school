<?php
get_header();
?>

	<main id="primary" class="site-main">

	<?php
		// Check rows existexists.
		if( have_rows('schedule_row') ):

			// Loop through rows.
			while( have_rows('schedule_row') ) : the_row();

				// $sub_value = get_sub_field('sub_field');
				print_r(the_row());

			// End loop.
			endwhile;
		endif;
	?>
	</main>
<?php
get_footer();
