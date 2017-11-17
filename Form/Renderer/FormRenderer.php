<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Form\Renderer;

use WBW\Library\Core\Sort\Tree\Alphabetical\AlphabeticalTreeSort;
use WBW\Library\Core\Sort\Tree\Alphabetical\AlphabeticalTreeSortInterface;

/**
 * Form renderer.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Form\Renderer
 * @final
 */
final class FormRenderer {

	/**
	 * Render a select option.
	 *
	 * @param mixed $option The option.
	 * @param TranslatorInterface $translator The translator service.
	 * @return string Returns the label.
	 */
	public static function render($option, $translator = null) {

		// Initialize the output.
		$output = "";

		// Check the option.
		if (is_null($option)) {
			return "label.empty_selection";
		}

		if ($option instanceof TranslateFormRendererInterface) {
			$output = $option->getChoiceLabel($translator);
		} else if ($option instanceof FormRendererInterface) {
			$output = $option->getChoiceLabel();
		} else {
			$output = "FormRendererInterface not implemented by this object";
		}

		if ($option instanceof AlphabeticalTreeSortInterface) {
			$multiplier	 = AlphabeticalTreeSort::getLevel($option);
			$output		 = implode("", ["+", str_repeat("-", $multiplier === 0 ? 0 : $multiplier - 1), " ", $output]);
		}

		// Return the output.
		return $output;
	}

}
