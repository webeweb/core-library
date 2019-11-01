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
 * Tva fictive4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTvaFictive4Trait {

    /**
     * Tva fictive4.
     *
     * @var float
     */
    private $tvaFictive4;

    /**
     * Get the tva fictive4.
     *
     * @return float Returns the tva fictive4.
     */
    public function getTvaFictive4() {
        return $this->tvaFictive4;
    }

    /**
     * Set the tva fictive4.
     *
     * @param float $tvaFictive4 The tva fictive4.
     */
    public function setTvaFictive4($tvaFictive4) {
        $this->tvaFictive4 = $tvaFictive4;
        return $this;
    }
}
