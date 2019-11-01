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
 * Tva fictive3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTvaFictive3Trait {

    /**
     * Tva fictive3.
     *
     * @var float
     */
    private $tvaFictive3;

    /**
     * Get the tva fictive3.
     *
     * @return float Returns the tva fictive3.
     */
    public function getTvaFictive3() {
        return $this->tvaFictive3;
    }

    /**
     * Set the tva fictive3.
     *
     * @param float $tvaFictive3 The tva fictive3.
     */
    public function setTvaFictive3($tvaFictive3) {
        $this->tvaFictive3 = $tvaFictive3;
        return $this;
    }
}
