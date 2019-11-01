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
 * Freq1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFreq1Trait {

    /**
     * Freq1.
     *
     * @var string
     */
    private $freq1;

    /**
     * Get the freq1.
     *
     * @return string Returns the freq1.
     */
    public function getFreq1() {
        return $this->freq1;
    }

    /**
     * Set the freq1.
     *
     * @param string $freq1 The freq1.
     */
    public function setFreq1($freq1) {
        $this->freq1 = $freq1;
        return $this;
    }
}
