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
 * Freq6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFreq6Trait {

    /**
     * Freq6.
     *
     * @var string
     */
    private $freq6;

    /**
     * Get the freq6.
     *
     * @return string Returns the freq6.
     */
    public function getFreq6() {
        return $this->freq6;
    }

    /**
     * Set the freq6.
     *
     * @param string $freq6 The freq6.
     */
    public function setFreq6($freq6) {
        $this->freq6 = $freq6;
        return $this;
    }
}
