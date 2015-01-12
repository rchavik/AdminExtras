<?php

App::uses('AppHelper', 'View/Helper');

class AdminExtrasHelper extends AppHelper {

	public $helpers = array(
		'Html',
	);

	public function beforeRender($viewFile) {
		$this->Html->css('datepicker', array('inline' => false));
		$this->Html->script('bootstrap-datepicker', array('inline' => false));
		$script = <<<EOF
$('input.input-datetime, .input-daterange').datepicker({
	autoclose: false,
	showTime: true,
	todayBtn: true,
	todayHighlight: true,
	clearBtn: true,
	format: 'yyyy-mm-dd H:i:s'
});
EOF;
		$this->Html->scriptBlock($script, array('block' => 'scriptBottom'));
	}

}
