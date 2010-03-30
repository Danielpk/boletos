<?php
class BoletoBbComponent extends Object{

	/**
	 * Armazena as opções padrões do boleto.
	 */
	var $options = array(
		'sacado',
		'endereco1',
		'endereco2',
		'valor_cobrado',
		'pedido'
	);
	

	function initialize(&$controller, $settings){}

	//function startup(&$controller){}

	function setup(array $options){
		$this->options = Set::merge($this->options, $options);
	}

	/**
	 * Renderiza o boleto
	 */
	function render($options = false){
		if($options){
			$this->setup($options);
		}
		$dadosboleto = $this->options;
		require_once App::pluginPath('boletos') . 'vendors' . DS . 'boletophp' . DS . 'boleto_bb.php';
	}

	//function beforeRender(&$controller){}

	//function shutdown(&$controller){}

	//function beforeRedirect(&$controller, $url, $status=null, $exit=true){}

}
?>
