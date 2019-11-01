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
 * Prefixe code client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrefixeCodeClientTrait {

    /**
     * Prefixe code client.
     *
     * @var string
     */
    private $prefixeCodeClient;

    /**
     * Get the prefixe code client.
     *
     * @return string Returns the prefixe code client.
     */
    public function getPrefixeCodeClient() {
        return $this->prefixeCodeClient;
    }

    /**
     * Set the prefixe code client.
     *
     * @param string $prefixeCodeClient The prefixe code client.
     */
    public function setPrefixeCodeClient($prefixeCodeClient) {
        $this->prefixeCodeClient = $prefixeCodeClient;
        return $this;
    }
}
