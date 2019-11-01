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
 * Freq9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFreq9Trait {

    /**
     * Freq9.
     *
     * @var bool
     */
    private $freq9;

    /**
     * Get the freq9.
     *
     * @return bool Returns the freq9.
     */
    public function getFreq9() {
        return $this->freq9;
    }

    /**
     * Set the freq9.
     *
     * @param bool $freq9 The freq9.
     */
    public function setFreq9($freq9) {
        $this->freq9 = $freq9;
        return $this;
    }
}
