<?php

namespace Mytask\HelloWorldcss\Block;

use Magento\Framework\View\Element\Template;

class Hello extends Template {
	public function getText() {
		return "Hello World  Css cdn - check view source show";
	}
}