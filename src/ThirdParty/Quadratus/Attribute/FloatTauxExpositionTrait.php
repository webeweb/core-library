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
 * Taux exposition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxExpositionTrait {

    /**
     * Taux exposition.
     *
     * @var float
     */
    private $tauxExposition;

    /**
     * Get the taux exposition.
     *
     * @return float Returns the taux exposition.
     */
    public function getTauxExposition() {
        return $this->tauxExposition;
    }

    /**
     * Set the taux exposition.
     *
     * @param float $tauxExposition The taux exposition.
     */
    public function setTauxExposition($tauxExposition) {
        $this->tauxExposition = $tauxExposition;
        return $this;
    }
}
