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
 * Refus client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRefusClientTrait {

    /**
     * Refus client.
     *
     * @var bool
     */
    private $refusClient;

    /**
     * Get the refus client.
     *
     * @return bool Returns the refus client.
     */
    public function getRefusClient() {
        return $this->refusClient;
    }

    /**
     * Set the refus client.
     *
     * @param bool $refusClient The refus client.
     */
    public function setRefusClient($refusClient) {
        $this->refusClient = $refusClient;
        return $this;
    }
}
