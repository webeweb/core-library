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
 * Acces clients trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesClientsTrait {

    /**
     * Acces clients.
     *
     * @var bool
     */
    private $accesClients;

    /**
     * Get the acces clients.
     *
     * @return bool Returns the acces clients.
     */
    public function getAccesClients() {
        return $this->accesClients;
    }

    /**
     * Set the acces clients.
     *
     * @param bool $accesClients The acces clients.
     */
    public function setAccesClients($accesClients) {
        $this->accesClients = $accesClients;
        return $this;
    }
}
