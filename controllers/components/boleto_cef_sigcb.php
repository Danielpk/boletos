<?php
class BoletoCefSigcbComponent extends Object{

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
	

	function initialize($controller){}

	public function startup($controller) {}

	public function shutdown($controller) {}

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
		require_once App::pluginPath('boletos') . 'vendors' . DS . 'boletophp' . DS . 'boleto_cef_sigcb.php';
	}

	function beforeRender($controller){}


}
