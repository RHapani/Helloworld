<?php

namespace RH\Helloworld\Block;

class Helloworld extends \Magento\Framework\View\Element\Template {

	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		array $data = []
	) {
		parent::__construct($context, $data);
	}

	public function getHelloworldData() {
		return __('RH Helloworld block file call successfully');
	}
}
?>