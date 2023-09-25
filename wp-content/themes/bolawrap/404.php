<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<section class="error-page">
	<div class="container">
		<div class="text-center">
			<h1>404 Page</h1>
		</div>
	
		<div class="error-content">
			<div class="page-content">

					<h2>This Page is not found</h2>
					<p>The Page You Requested Cannot Be Found. The Page You Are Looking For Might Have Been Removed, Had Its Name Changed, Or Is Temporarily Unavailable.</p>
					<h5>Please try the following:</h5>
					<ul>
						<li>If you typed the page address in the Address bar, make sure that it is spelled correctly.</li>
						<li>Open the <a href="<?php echo home_url(); ?>">Home Page</a> and look for links to the information you want.</li>
						<li>Use the navigation bar on the left or top to find the link you are looking for.</li>
					</ul>
					<div class="mt-40">
						<a href="<?php echo home_url(); ?>" class="btn">Back To Home</a>
					</div>

			</div>
		</div>
	</div>
</section>


<?php
get_footer();
