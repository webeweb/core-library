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
 * Taux tva3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxTva3Trait {

    /**
     * Taux tva3.
     *
     * @var float
     */
    private $tauxTva3;

    /**
     * Get the taux tva3.
     *
     * @return float Returns the taux tva3.
     */
    public function getTauxTva3() {
        return $this->tauxTva3;
    }

    /**
     * Set the taux tva3.
     *
     * @param float $tauxTva3 The taux tva3.
     */
    public function setTauxTva3($tauxTva3) {
        $this->tauxTva3 = $tauxTva3;
        return $this;
    }
}
