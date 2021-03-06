<?php
use Kyrst\Base\Controllers\BaseController as BaseController;

class ApplicationController extends BaseController
{
	protected $libs = array
	(
		'jquery' => array
		(
			'js' => 'libs/jquery/jquery.js'
		),
		'jquery-ui' => array
		(
			'css' => 'libs/jquery_ui/jquery-ui.css',
			'js' => 'libs/jquery_ui/jquery-ui.js'
		),
		'jquery-lazyload' => array
		(
			'js' => 'libs/jquery_lazyload/jquery.lazyload.min.js'
		),
		'bootstrap' => array
		(
			'css' => 'libs/bootstrap/css/bootstrap.css',
			'js' => 'libs/bootstrap/js/bootstrap.js'
		),
		'bootstrap-datepicker' => array
		(
			'css' => 'libs/bootstrap-datepicker/css/datepicker.css',
			'js' => 'libs/bootstrap-datepicker/js/bootstrap-datepicker.js'
		),
		'bootstrap-wysiwyg' => array
		(
			'css' => 'libs/bootstrap-wysiwyg/index.css',
			'js' => 'libs/bootstrap-wysiwyg/bootstrap-wysiwyg.js'
		),
		'bootbox' => array
		(
			'js' => 'libs/bootbox/bootbox.js'
		),
		'soundmanager2' => array
		(
			'js' => 'libs/soundmanager2/soundmanager2-jsmin.js'
			//'js' => 'libs/soundmanager2/ssoundmanager2-nodebug-jsmin.js'
		),
		'underscore' => array
		(
			'js' => 'libs/underscore/underscore.js'
		),
		'uniform' => array
		(
			'css' => 'libs/uniform/themes/default/css/uniform.default.min.css',
			//'css' => 'libs/uniform/themes/aristo/css/uniform.aristo.min.css',
			'js' => 'libs/uniform/jquery.uniform.min.js'
		),
		'mars-admin' => array
		(
			'css' => array
			(
				'libs/mars-admin/html/assets/css/app.css'
			),
			'js' => array
			(
				'libs/mars-admin/html/assets/js/bootstrap/tab.js'
			)
		),
		'kyrst' => array
		(
			'css' => array
			(
				'packages/kyrst/base/css/global.css'
			),
			'js' => array
			(
				'packages/kyrst/base/js/ajax_request.js',
				'packages/kyrst/base/js/ajax.js',
				'packages/kyrst/base/js/ui.js',
				'packages/kyrst/base/js/helper.js',
				'packages/kyrst/base/js/helpers/time.js',
				'packages/kyrst/base/js/kyrst.js'
			)
		),
		'jcrop' => array
		(
			'css' => 'libs/jcrop/css/jquery.Jcrop.min.css',
			'js' => 'libs/jcrop/js/jquery.Jcrop.min.js'
		),
		'jquery-tagsinput' => array
		(
			'css' => 'libs/jquery-tagsinput/jquery.tagsinput.css',
			'js' => 'libs/jquery-tagsinput/jquery.tagsinput.js'
			//'js' => 'libs/jquery-tagsinput/jquery.tagsinput.min.js'
		),
		'jquery-transit' => array
		(
			'js' => 'libs/jquery_transit/jquery.transit.min.js'
		),
		'scrollorama' => array
		(
			/*'css' => array
			(
				'libs/scrollorama/css/style.css'
			),*/
			'js' => array
			(
				'libs/scrollorama/js/jquery.lettering-0.6.1.min.js',
				'libs/scrollorama/js/jquery.scrollorama.js'
			)
		),
		'animateWithCSS' => array
		(
			'js' => 'libs/animateWithCSS/animateWithCSS.js'
		)
	);

	function __construct()
	{
		parent::__construct();

		// jQuery
		$this->load_lib('jquery');

		// jQuery UI
		$this->load_lib('jquery-ui');

		// Bootstrap
		$this->load_lib('bootstrap');

		// Bootbox
		$this->load_lib('bootbox');

		// Underscore
		$this->load_lib('underscore');

		// Uniform
		$this->load_lib('uniform');

		// Kyrst
		$this->load_lib('kyrst');
	}

	protected function include_header()
	{
		$this->assign
		(
			'header_html',
			View::make
			(
				'layouts/partials/header'
			)
			->with('user', $this->user)
			->with('current_controller', $this->current_controller)
			->with('current_page', $this->current_page)
			->render(),
			'layout'
		);
	}
}