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
 * Interets cap2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringInteretsCap2Trait {

    /**
     * Interets cap2.
     *
     * @var string
     */
    private $interetsCap2;

    /**
     * Get the interets cap2.
     *
     * @return string Returns the interets cap2.
     */
    public function getInteretsCap2() {
        return $this->interetsCap2;
    }

    /**
     * Set the interets cap2.
     *
     * @param string $interetsCap2 The interets cap2.
     */
    public function setInteretsCap2($interetsCap2) {
        $this->interetsCap2 = $interetsCap2;
        return $this;
    }
}
