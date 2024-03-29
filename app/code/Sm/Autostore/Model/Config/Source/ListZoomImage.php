<?php
/*------------------------------------------------------------------------
# SM Autostore - Version 1.0.0
# Copyright (c) 2016 YouTech Company. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: YouTech Company
# Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

namespace Sm\Autostore\Model\Config\Source;

class ListZoomImage implements \Magento\Framework\Option\ArrayInterface
{
	public function toOptionArray()
	{
		return [
			['value' => 'inner', 'label' => __('In')],
			['value' => 'window', 'label' => __('Out')],
			['value' => 'lens', 'label' => __('Lens')],
		];
	}
}

