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
 * Freq11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFreq11Trait {

    /**
     * Freq11.
     *
     * @var string
     */
    private $freq11;

    /**
     * Get the freq11.
     *
     * @return string Returns the freq11.
     */
    public function getFreq11() {
        return $this->freq11;
    }

    /**
     * Set the freq11.
     *
     * @param string $freq11 The freq11.
     */
    public function setFreq11($freq11) {
        $this->freq11 = $freq11;
        return $this;
    }
}
