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
 * Tva fictive5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTvaFictive5Trait {

    /**
     * Tva fictive5.
     *
     * @var float
     */
    private $tvaFictive5;

    /**
     * Get the tva fictive5.
     *
     * @return float Returns the tva fictive5.
     */
    public function getTvaFictive5() {
        return $this->tvaFictive5;
    }

    /**
     * Set the tva fictive5.
     *
     * @param float $tvaFictive5 The tva fictive5.
     */
    public function setTvaFictive5($tvaFictive5) {
        $this->tvaFictive5 = $tvaFictive5;
        return $this;
    }
}
