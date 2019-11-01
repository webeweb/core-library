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
 * Taux tva4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxTva4Trait {

    /**
     * Taux tva4.
     *
     * @var float
     */
    private $tauxTva4;

    /**
     * Get the taux tva4.
     *
     * @return float Returns the taux tva4.
     */
    public function getTauxTva4() {
        return $this->tauxTva4;
    }

    /**
     * Set the taux tva4.
     *
     * @param float $tauxTva4 The taux tva4.
     */
    public function setTauxTva4($tauxTva4) {
        $this->tauxTva4 = $tauxTva4;
        return $this;
    }
}
