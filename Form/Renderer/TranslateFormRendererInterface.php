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

/**
 * Translate form renderer interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Form\Renderer
 */
interface TranslateFormRendererInterface {

	/**
	 * Get the choice label.
	 *
	 * @param TranslatorInterface $translator The translator service.
	 * @return string Returns the choice label.
	 */
	public function getChoiceLabel($translator);
}
