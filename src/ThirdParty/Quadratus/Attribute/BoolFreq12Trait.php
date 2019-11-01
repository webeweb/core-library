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
 * Freq12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFreq12Trait {

    /**
     * Freq12.
     *
     * @var bool
     */
    private $freq12;

    /**
     * Get the freq12.
     *
     * @return bool Returns the freq12.
     */
    public function getFreq12() {
        return $this->freq12;
    }

    /**
     * Set the freq12.
     *
     * @param bool $freq12 The freq12.
     */
    public function setFreq12($freq12) {
        $this->freq12 = $freq12;
        return $this;
    }
}
