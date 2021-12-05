<style>
	.navbar-form input:not([type="submit"]):not([type="radio"]):not([type="checkbox"]):not([type="file"]){
		border: none;
		border-radius: 0;
		padding: 0.5rem;
	}

	.navbar-form  .btn-search-form  {
		border-radius: 0;
		box-shadow: none;
		background-color: #0367bf;
	}

	.navbar-form {
		display: none;
		padding: 1rem;
		background: #0267bf;
		margin-top: 1rem;
	}

	.expand-searchform {
		display: flex;
		z-index: 1000000;
		padding-right: 1rem;
	}

	.expand-searchform .search-input{
		flex-grow: 1;
		margin-right: 0.5rem;
	}

</style>
<div class="container">
	<form id="search-navbar" role="search" method="get" class="search-form navbar-form" action="<?php echo home_url('/'); ?>">
		<div class="search-input">
			<input id="search-input" type="search" class="search-field" placeholder="<?php esc_html_e('Search for:', 'orbital') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php esc_html_e('Search for:', 'orbital') ?>" />
		</div>
		<div class="search-submit">
			<button type="submit" class="btn btn-primary btn-search-form"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>