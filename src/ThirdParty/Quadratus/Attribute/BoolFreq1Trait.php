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
trait BoolFreq1Trait {

    /**
     * Freq1.
     *
     * @var bool
     */
    private $freq1;

    /**
     * Get the freq1.
     *
     * @return bool Returns the freq1.
     */
    public function getFreq1() {
        return $this->freq1;
    }

    /**
     * Set the freq1.
     *
     * @param bool $freq1 The freq1.
     */
    public function setFreq1($freq1) {
        $this->freq1 = $freq1;
        return $this;
    }
}
