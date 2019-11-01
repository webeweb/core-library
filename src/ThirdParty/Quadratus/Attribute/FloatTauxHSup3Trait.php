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
 * Taux h sup3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxHSup3Trait {

    /**
     * Taux h sup3.
     *
     * @var float
     */
    private $tauxHSup3;

    /**
     * Get the taux h sup3.
     *
     * @return float Returns the taux h sup3.
     */
    public function getTauxHSup3() {
        return $this->tauxHSup3;
    }

    /**
     * Set the taux h sup3.
     *
     * @param float $tauxHSup3 The taux h sup3.
     */
    public function setTauxHSup3($tauxHSup3) {
        $this->tauxHSup3 = $tauxHSup3;
        return $this;
    }
}
