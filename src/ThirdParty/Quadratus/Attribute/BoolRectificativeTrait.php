<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Rectificative trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRectificativeTrait {

    /**
     * Rectificative.
     *
     * @var bool
     */
    private $rectificative;

    /**
     * Get the rectificative.
     *
     * @return bool Returns the rectificative.
     */
    public function getRectificative() {
        return $this->rectificative;
    }

    /**
     * Set the rectificative.
     *
     * @param bool $rectificative The rectificative.
     */
    public function setRectificative($rectificative) {
        $this->rectificative = $rectificative;
        return $this;
    }
}
