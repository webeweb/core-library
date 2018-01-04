<?php

/**
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

		// Check the option.
		if (null === $option) {
			return null !== $translator ? $translator->trans("label.empty_selection") : "Empty selection";
		}

		// Check the implementation.
		if (true === ($option instanceof TranslatedChoiceRendererInterface || $option instanceof TranslateFormRendererInterface)) {
			$output = $option->getTranslatedChoiceLabel($translator);
		} else if (true === ($option instanceof ChoiceRendererInterface || $option instanceof FormRendererInterface)) {
			$output = $option->getChoiceLabel();
		} else {
			$output = "FormRendererInterface not implemented by this object";
		}

		if (true === ($option instanceof AlphabeticalTreeSortInterface)) {
			$multiplier	 = AlphabeticalTreeSort::getLevel($option);
			$nbsp		 = html_entity_decode("&nbsp;");
			$symbol		 = html_entity_decode("&#9500;");
			$output		 = implode("", [str_repeat($nbsp, $multiplier * 3), $symbol, $nbsp, $output]);
		}

		// Return the output.
		return $output;
	}

}
