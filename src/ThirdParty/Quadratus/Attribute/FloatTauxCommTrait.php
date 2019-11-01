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
 * Taux comm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxCommTrait {

    /**
     * Taux comm.
     *
     * @var float
     */
    private $tauxComm;

    /**
     * Get the taux comm.
     *
     * @return float Returns the taux comm.
     */
    public function getTauxComm() {
        return $this->tauxComm;
    }

    /**
     * Set the taux comm.
     *
     * @param float $tauxComm The taux comm.
     */
    public function setTauxComm($tauxComm) {
        $this->tauxComm = $tauxComm;
        return $this;
    }
}
