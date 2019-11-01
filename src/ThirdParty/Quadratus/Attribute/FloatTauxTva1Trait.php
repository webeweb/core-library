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
 * Taux tva1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxTva1Trait {

    /**
     * Taux tva1.
     *
     * @var float
     */
    private $tauxTva1;

    /**
     * Get the taux tva1.
     *
     * @return float Returns the taux tva1.
     */
    public function getTauxTva1() {
        return $this->tauxTva1;
    }

    /**
     * Set the taux tva1.
     *
     * @param float $tauxTva1 The taux tva1.
     */
    public function setTauxTva1($tauxTva1) {
        $this->tauxTva1 = $tauxTva1;
        return $this;
    }
}
