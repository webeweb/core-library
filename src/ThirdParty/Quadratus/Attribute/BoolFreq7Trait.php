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
 * Freq7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFreq7Trait {

    /**
     * Freq7.
     *
     * @var bool
     */
    private $freq7;

    /**
     * Get the freq7.
     *
     * @return bool Returns the freq7.
     */
    public function getFreq7() {
        return $this->freq7;
    }

    /**
     * Set the freq7.
     *
     * @param bool $freq7 The freq7.
     */
    public function setFreq7($freq7) {
        $this->freq7 = $freq7;
        return $this;
    }
}
