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
 * Freq10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFreq10Trait {

    /**
     * Freq10.
     *
     * @var bool
     */
    private $freq10;

    /**
     * Get the freq10.
     *
     * @return bool Returns the freq10.
     */
    public function getFreq10() {
        return $this->freq10;
    }

    /**
     * Set the freq10.
     *
     * @param bool $freq10 The freq10.
     */
    public function setFreq10($freq10) {
        $this->freq10 = $freq10;
        return $this;
    }
}
