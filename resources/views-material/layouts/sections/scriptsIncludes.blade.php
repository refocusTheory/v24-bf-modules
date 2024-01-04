<!-- laravel style -->
<script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
<!-- beautify ignore:start -->
@if ($configData['hasCustomizer'])
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>
@endif

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{ asset('assets/js/config.js') }}"></script>

@if ($configData['hasCustomizer'])
  <script>
    window.templateCustomizer = new TemplateCustomizer({
      cssPath: '',
      themesPath: '',
      defaultShowDropdownOnHover: {{$configData['showDropdownOnHover']}}, // true/false (for horizontal layout only)
      displayCustomizer: {{$configData['displayCustomizer']}},
      lang: '{{ app()->getLocale() }}',
      pathResolver: function(path) {
        var resolvedPaths = {
          // Core stylesheets
          @foreach (['core'] as $name)
            '{{ $name }}.css': '{{ asset(mix("assets/vendor/css{$configData['rtlSupport']}/{$name}.css")) }}',
            '{{ $name }}-dark.css': '{{ asset(mix("assets/vendor/css{$configData['rtlSupport']}/{$name}-dark.css")) }}',
          @endforeach

          // Themes
          @foreach (['default', 'bordered', 'semi-dark'] as $name)
            'theme-{{ $name }}.css': '{{ asset(mix("assets/vendor/css{$configData['rtlSupport']}/theme-{$name}.css")) }}',
            'theme-{{ $name }}-dark.css':
            '{{ asset(mix("assets/vendor/css{$configData['rtlSupport']}/theme-{$name}-dark.css")) }}',
          @endforeach
        }
        return resolvedPaths[path] || path;
      },
      'controls': <?php echo json_encode($configData['customizerControls']); ?>,
    });
  </script>
@endif
<script>
	function inIframe() {
				try {
					return window.self !== window.top;
				} catch (e) {
					return true;
				}
			}
			if (inIframe()) {
				// document.body.classList.add('iframed');
				console.log("Inside an iframe");

				
				// Create a link element
				var customStylesheet = document.createElement('link');

				// Set the attributes for the link element
				customStylesheet.rel = 'stylesheet';
				customStylesheet.type = 'text/css';
				customStylesheet.href = '/css/custom.css'; // Replace with the actual path to your stylesheet

				// Append the link element to the head of the document
				document.head.appendChild(customStylesheet);
				// document.documentElement.classList.add('be-light-mode');
				// var htmlElement = document.documentElement;
				// if (htmlElement.classList.contains('be-dark-mode')) {
				// 	htmlElement.classList.remove('be-dark-mode');
				// }

				//htmlElement.classList.add('be-light-mode');
			}
</script>