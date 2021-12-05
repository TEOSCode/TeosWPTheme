<div id="cookies-wrapper"></div>
<script>
	window.addEventListener("load", function(){ window.cookieconsent.initialise({
		container: document.getElementById("cookies-wrapper"),
		"palette": {
			"popup": {
				"background": "#edeff5",
				"text": "#838391"
			},
			"button": {
				"background": "#4b81e8"
			}
		},
		"type": "<?php echo orbital_customize_option('orbital_cookies_type'); ?>",
		"content": {
			"message": "<?php echo orbital_customize_option('orbital_cookies_message'); ?>",
			"deny": "<?php echo orbital_customize_option('orbital_cookies_deny'); ?>",
			"allow": "<?php echo orbital_customize_option('orbital_cookies_allow'); ?>",
			"revoke": "<?php echo orbital_customize_option('orbital_cookies_minimize'); ?>",
			"dismiss": "<?php echo orbital_customize_option('orbital_cookies_dismiss'); ?>",
			"link": "<?php echo orbital_customize_option('orbital_cookies_text_link'); ?>",
			"href": "<?php echo get_the_permalink(orbital_customize_option('orbital_cookies_link')); ?>",
		}
		<?php if (orbital_customize_option('orbital_cookies_type') == 'opt-in' || orbital_customize_option('orbital_cookies_type') == 'opt-out') : ?>
		,
		onInitialise: function (status) {
			var type = this.options.type;
			var didConsent = this.hasConsented();
			if (type == 'opt-in' && didConsent) {
				<?php echo orbital_customize_option('orbital_cookies_enable_hook'); ?>
			}
			if (type == 'opt-out' && !didConsent) {
				<?php echo orbital_customize_option('orbital_cookies_disable_hook'); ?>
			}
		},

		onStatusChange: function(status, chosenBefore) {
			var type = this.options.type;
			var didConsent = this.hasConsented();
			if (type == 'opt-in' && didConsent) {
				<?php echo orbital_customize_option('orbital_cookies_enable_hook'); ?>
			}
			if (type == 'opt-out' && !didConsent) {
				<?php echo orbital_customize_option('orbital_cookies_disable_hook'); ?>
			}
		},

		onRevokeChoice: function() {
			var type = this.options.type;
			if (type == 'opt-in') {
				<?php echo orbital_customize_option('orbital_cookies_disable_hook'); ?>
			}
			if (type == 'opt-out') {
				<?php echo orbital_customize_option('orbital_cookies_enable_hook'); ?>
			}
		}
		<?php endif; ?>
	})
});
</script>