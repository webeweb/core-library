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
 * Taux ccs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxCcsTrait {

    /**
     * Taux ccs.
     *
     * @var float
     */
    private $tauxCcs;

    /**
     * Get the taux ccs.
     *
     * @return float Returns the taux ccs.
     */
    public function getTauxCcs() {
        return $this->tauxCcs;
    }

    /**
     * Set the taux ccs.
     *
     * @param float $tauxCcs The taux ccs.
     */
    public function setTauxCcs($tauxCcs) {
        $this->tauxCcs = $tauxCcs;
        return $this;
    }
}
