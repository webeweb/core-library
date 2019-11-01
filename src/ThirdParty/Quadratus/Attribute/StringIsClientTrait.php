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
 * Is client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIsClientTrait {

    /**
     * Is client.
     *
     * @var string
     */
    private $isClient;

    /**
     * Get the is client.
     *
     * @return string Returns the is client.
     */
    public function getIsClient() {
        return $this->isClient;
    }

    /**
     * Set the is client.
     *
     * @param string $isClient The is client.
     */
    public function setIsClient($isClient) {
        $this->isClient = $isClient;
        return $this;
    }
}
