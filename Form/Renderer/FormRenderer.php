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
			$output = "label.empty_selection";
		} elseif ($option instanceof TranslateFormRendererInterface) {
			$output = $option->getChoiceLabel($translator);
		} elseif ($option instanceof FormRendererInterface) {
			$output = $option->getChoiceLabel();
		} else {
			$output = "FormRendererInterface not implemented by this object";
		}

		// Return the output.
		return $output;
	}

}
