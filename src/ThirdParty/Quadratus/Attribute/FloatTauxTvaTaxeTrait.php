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
 * Taux tva taxe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxTvaTaxeTrait {

    /**
     * Taux tva taxe.
     *
     * @var float
     */
    private $tauxTvaTaxe;

    /**
     * Get the taux tva taxe.
     *
     * @return float Returns the taux tva taxe.
     */
    public function getTauxTvaTaxe() {
        return $this->tauxTvaTaxe;
    }

    /**
     * Set the taux tva taxe.
     *
     * @param float $tauxTvaTaxe The taux tva taxe.
     */
    public function setTauxTvaTaxe($tauxTvaTaxe) {
        $this->tauxTvaTaxe = $tauxTvaTaxe;
        return $this;
    }
}
