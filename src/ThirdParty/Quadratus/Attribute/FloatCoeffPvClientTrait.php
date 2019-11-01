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
 * Coeff pv client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoeffPvClientTrait {

    /**
     * Coeff pv client.
     *
     * @var float
     */
    private $coeffPvClient;

    /**
     * Get the coeff pv client.
     *
     * @return float Returns the coeff pv client.
     */
    public function getCoeffPvClient() {
        return $this->coeffPvClient;
    }

    /**
     * Set the coeff pv client.
     *
     * @param float $coeffPvClient The coeff pv client.
     */
    public function setCoeffPvClient($coeffPvClient) {
        $this->coeffPvClient = $coeffPvClient;
        return $this;
    }
}
