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
 * Freq2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFreq2Trait {

    /**
     * Freq2.
     *
     * @var bool
     */
    private $freq2;

    /**
     * Get the freq2.
     *
     * @return bool Returns the freq2.
     */
    public function getFreq2() {
        return $this->freq2;
    }

    /**
     * Set the freq2.
     *
     * @param bool $freq2 The freq2.
     */
    public function setFreq2($freq2) {
        $this->freq2 = $freq2;
        return $this;
    }
}
