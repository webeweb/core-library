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
 * Type pmag client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTypePmagClientTrait {

    /**
     * Type pmag client.
     *
     * @var int
     */
    private $typePmagClient;

    /**
     * Get the type pmag client.
     *
     * @return int Returns the type pmag client.
     */
    public function getTypePmagClient() {
        return $this->typePmagClient;
    }

    /**
     * Set the type pmag client.
     *
     * @param int $typePmagClient The type pmag client.
     */
    public function setTypePmagClient($typePmagClient) {
        $this->typePmagClient = $typePmagClient;
        return $this;
    }
}
