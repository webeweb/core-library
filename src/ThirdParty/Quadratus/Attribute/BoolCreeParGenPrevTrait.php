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
 * Cree par gen prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreeParGenPrevTrait {

    /**
     * Cree par gen prev.
     *
     * @var bool
     */
    private $creeParGenPrev;

    /**
     * Get the cree par gen prev.
     *
     * @return bool Returns the cree par gen prev.
     */
    public function getCreeParGenPrev() {
        return $this->creeParGenPrev;
    }

    /**
     * Set the cree par gen prev.
     *
     * @param bool $creeParGenPrev The cree par gen prev.
     */
    public function setCreeParGenPrev($creeParGenPrev) {
        $this->creeParGenPrev = $creeParGenPrev;
        return $this;
    }
}
