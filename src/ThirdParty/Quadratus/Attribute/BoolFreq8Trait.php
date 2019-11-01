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
 * Freq8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFreq8Trait {

    /**
     * Freq8.
     *
     * @var bool
     */
    private $freq8;

    /**
     * Get the freq8.
     *
     * @return bool Returns the freq8.
     */
    public function getFreq8() {
        return $this->freq8;
    }

    /**
     * Set the freq8.
     *
     * @param bool $freq8 The freq8.
     */
    public function setFreq8($freq8) {
        $this->freq8 = $freq8;
        return $this;
    }
}
