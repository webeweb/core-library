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
 * Taux transport trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxTransportTrait {

    /**
     * Taux transport.
     *
     * @var float
     */
    private $tauxTransport;

    /**
     * Get the taux transport.
     *
     * @return float Returns the taux transport.
     */
    public function getTauxTransport() {
        return $this->tauxTransport;
    }

    /**
     * Set the taux transport.
     *
     * @param float $tauxTransport The taux transport.
     */
    public function setTauxTransport($tauxTransport) {
        $this->tauxTransport = $tauxTransport;
        return $this;
    }
}
