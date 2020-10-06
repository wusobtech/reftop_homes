
<!--jQuery-->
<script src="{{ $web_source }}/js/jquery-3.4.1.min.js"></script>
<!--Popper js-->
<script src="{{ $web_source }}/js/popper.min.js"></script>
<!--Bootstrap js-->
<script src="{{ $web_source }}/js/bootstrap.min.js"></script>
<!--Magnific popup js-->
<script src="{{ $web_source }}/js/jquery.magnific-popup.min.js"></script>
<!--jquery easing js-->
<script src="{{ $web_source }}/js/jquery.easing.min.js"></script>
<!--jquery ytplayer js-->
<script src="{{ $web_source }}/js/jquery.mb.YTPlayer.min.js"></script>
<!--Isotope filter js-->
<script src="{{ $web_source }}/js/mixitup.min.js"></script>
<!--wow js-->
<script src="{{ $web_source }}/js/wow.min.js"></script>
<!--owl carousel js-->
<script src="{{ $web_source }}/js/owl.carousel.min.js"></script>
<!--countdown js-->
<script src="{{ $web_source }}/js/jquery.countdown.min.js"></script>
<!--custom js-->
<script src="{{ $web_source }}/js/scripts.js"></script>
<script src="{{ $web_source }}/js/custom.js"></script>
<script src="{{asset('toast')}}/jquery.toast.min.js"></script>

<!-- toastr init js-->
{{-- <script src="{{url('admin')}}/assets/js/pages/toastr.init.js"></script> --}}
<script>
	! function(p) {
		"use strict";
		var notifier;

		function t() {}
		t.prototype.send = function(t, i, o, e, n, a, s, r) {
				var c = {
					heading: t,
					text: i,
					position: o,
					loaderBg: e,
					icon: n,
					hideAfter: a = a || 3e3,
					stack: s = s || 1
				};
				r && (c.showHideTransition = r),
					// console.log(c),
					p.toast().reset("all"),
					p.toast(c)
			},
			p.NotificationApp = new t,
			p.NotificationApp.Constructor = t
	}(window.jQuery),
	function(i) {
		notifier = i;
		"use strict";
	}(window.jQuery);

	function successMsg(title, msg) {
		notifier.NotificationApp.send(title, msg, "top-right", "#5ba035", "success")
	}

	function errorMsg(title, msg) {
		notifier.NotificationApp.send(title, msg, "top-right", "#bf441d", "error")
	}
</script>
@yield('script')
