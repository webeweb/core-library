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
 * Lst code prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLstCodePrevTrait {

    /**
     * Lst code prev.
     *
     * @var string
     */
    private $lstCodePrev;

    /**
     * Get the lst code prev.
     *
     * @return string Returns the lst code prev.
     */
    public function getLstCodePrev() {
        return $this->lstCodePrev;
    }

    /**
     * Set the lst code prev.
     *
     * @param string $lstCodePrev The lst code prev.
     */
    public function setLstCodePrev($lstCodePrev) {
        $this->lstCodePrev = $lstCodePrev;
        return $this;
    }
}
