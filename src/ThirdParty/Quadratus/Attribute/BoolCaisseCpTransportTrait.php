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
 * Caisse cp transport trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCaisseCpTransportTrait {

    /**
     * Caisse cp transport.
     *
     * @var bool
     */
    private $caisseCpTransport;

    /**
     * Get the caisse cp transport.
     *
     * @return bool Returns the caisse cp transport.
     */
    public function getCaisseCpTransport() {
        return $this->caisseCpTransport;
    }

    /**
     * Set the caisse cp transport.
     *
     * @param bool $caisseCpTransport The caisse cp transport.
     */
    public function setCaisseCpTransport($caisseCpTransport) {
        $this->caisseCpTransport = $caisseCpTransport;
        return $this;
    }
}
