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
 * Du client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDuClientTrait {

    /**
     * Du client.
     *
     * @var string
     */
    private $duClient;

    /**
     * Get the du client.
     *
     * @return string Returns the du client.
     */
    public function getDuClient() {
        return $this->duClient;
    }

    /**
     * Set the du client.
     *
     * @param string $duClient The du client.
     */
    public function setDuClient($duClient) {
        $this->duClient = $duClient;
        return $this;
    }
}
