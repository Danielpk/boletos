<?php
class BoletoItauComponent extends Object {

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

	public function initialize(Controller $controller){

	}

	public function startup(Controller $controller){

	}

	public function setup(array $options){
		$this->options = Set::merge($this->options, $options);
	}

	/**
	 * Renderiza o boleto
	 */
	public function render($options = false){
		if($options){
			$this->setup($options);
		}
		$dadosboleto = $this->options;
		require_once App::pluginPath('Boletos') . 'Vendor' . DS . 'boletophp' . DS . 'boleto_itau.php';
	}

	public function beforeRender($controller){

	}

	public function shutdown($controller){

	}
}