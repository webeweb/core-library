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
 * Taux remise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxRemiseTrait {

    /**
     * Taux remise.
     *
     * @var float
     */
    private $tauxRemise;

    /**
     * Get the taux remise.
     *
     * @return float Returns the taux remise.
     */
    public function getTauxRemise() {
        return $this->tauxRemise;
    }

    /**
     * Set the taux remise.
     *
     * @param float $tauxRemise The taux remise.
     */
    public function setTauxRemise($tauxRemise) {
        $this->tauxRemise = $tauxRemise;
        return $this;
    }
}
