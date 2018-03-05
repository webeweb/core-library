<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Form\Renderer;

/**
 * Translated choice renderer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Form\Renderer
 */
interface TranslatedChoiceRendererInterface {

    /**
     * Get the translated choice label.
     *
     * @param TranslatorInterface $translator The translator service.
     * @return string Returns the translated choice label.
     */
    public function getTranslatedChoiceLabel($translator = null);
}
