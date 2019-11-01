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
 * Freq3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFreq3Trait {

    /**
     * Freq3.
     *
     * @var string
     */
    private $freq3;

    /**
     * Get the freq3.
     *
     * @return string Returns the freq3.
     */
    public function getFreq3() {
        return $this->freq3;
    }

    /**
     * Set the freq3.
     *
     * @param string $freq3 The freq3.
     */
    public function setFreq3($freq3) {
        $this->freq3 = $freq3;
        return $this;
    }
}
