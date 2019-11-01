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
 * Pourcent transport trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentTransportTrait {

    /**
     * Pourcent transport.
     *
     * @var float
     */
    private $pourcentTransport;

    /**
     * Get the pourcent transport.
     *
     * @return float Returns the pourcent transport.
     */
    public function getPourcentTransport() {
        return $this->pourcentTransport;
    }

    /**
     * Set the pourcent transport.
     *
     * @param float $pourcentTransport The pourcent transport.
     */
    public function setPourcentTransport($pourcentTransport) {
        $this->pourcentTransport = $pourcentTransport;
        return $this;
    }
}
