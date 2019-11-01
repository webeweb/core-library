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
 * Fct balance client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctBalanceClientTrait {

    /**
     * Fct balance client.
     *
     * @var bool
     */
    private $fctBalanceClient;

    /**
     * Get the fct balance client.
     *
     * @return bool Returns the fct balance client.
     */
    public function getFctBalanceClient() {
        return $this->fctBalanceClient;
    }

    /**
     * Set the fct balance client.
     *
     * @param bool $fctBalanceClient The fct balance client.
     */
    public function setFctBalanceClient($fctBalanceClient) {
        $this->fctBalanceClient = $fctBalanceClient;
        return $this;
    }
}
