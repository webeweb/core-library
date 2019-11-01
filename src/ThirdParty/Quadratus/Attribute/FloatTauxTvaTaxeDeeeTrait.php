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
 * Taux tva taxe deee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxTvaTaxeDeeeTrait {

    /**
     * Taux tva taxe deee.
     *
     * @var float
     */
    private $tauxTvaTaxeDeee;

    /**
     * Get the taux tva taxe deee.
     *
     * @return float Returns the taux tva taxe deee.
     */
    public function getTauxTvaTaxeDeee() {
        return $this->tauxTvaTaxeDeee;
    }

    /**
     * Set the taux tva taxe deee.
     *
     * @param float $tauxTvaTaxeDeee The taux tva taxe deee.
     */
    public function setTauxTvaTaxeDeee($tauxTvaTaxeDeee) {
        $this->tauxTvaTaxeDeee = $tauxTvaTaxeDeee;
        return $this;
    }
}
