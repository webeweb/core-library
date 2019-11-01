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
 * Coche client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCocheClientTrait {

    /**
     * Coche client.
     *
     * @var bool
     */
    private $cocheClient;

    /**
     * Get the coche client.
     *
     * @return bool Returns the coche client.
     */
    public function getCocheClient() {
        return $this->cocheClient;
    }

    /**
     * Set the coche client.
     *
     * @param bool $cocheClient The coche client.
     */
    public function setCocheClient($cocheClient) {
        $this->cocheClient = $cocheClient;
        return $this;
    }
}
