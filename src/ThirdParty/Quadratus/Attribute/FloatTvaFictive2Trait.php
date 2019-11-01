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
 * Tva fictive2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTvaFictive2Trait {

    /**
     * Tva fictive2.
     *
     * @var float
     */
    private $tvaFictive2;

    /**
     * Get the tva fictive2.
     *
     * @return float Returns the tva fictive2.
     */
    public function getTvaFictive2() {
        return $this->tvaFictive2;
    }

    /**
     * Set the tva fictive2.
     *
     * @param float $tvaFictive2 The tva fictive2.
     */
    public function setTvaFictive2($tvaFictive2) {
        $this->tvaFictive2 = $tvaFictive2;
        return $this;
    }
}
