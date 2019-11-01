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
 * Freq5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFreq5Trait {

    /**
     * Freq5.
     *
     * @var string
     */
    private $freq5;

    /**
     * Get the freq5.
     *
     * @return string Returns the freq5.
     */
    public function getFreq5() {
        return $this->freq5;
    }

    /**
     * Set the freq5.
     *
     * @param string $freq5 The freq5.
     */
    public function setFreq5($freq5) {
        $this->freq5 = $freq5;
        return $this;
    }
}
