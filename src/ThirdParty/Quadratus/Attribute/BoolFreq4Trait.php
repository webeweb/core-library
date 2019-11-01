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
 * Freq4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFreq4Trait {

    /**
     * Freq4.
     *
     * @var bool
     */
    private $freq4;

    /**
     * Get the freq4.
     *
     * @return bool Returns the freq4.
     */
    public function getFreq4() {
        return $this->freq4;
    }

    /**
     * Set the freq4.
     *
     * @param bool $freq4 The freq4.
     */
    public function setFreq4($freq4) {
        $this->freq4 = $freq4;
        return $this;
    }
}
