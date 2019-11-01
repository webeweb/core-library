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
 * Suivi aux client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviAuxClientTrait {

    /**
     * Suivi aux client.
     *
     * @var bool
     */
    private $suiviAuxClient;

    /**
     * Get the suivi aux client.
     *
     * @return bool Returns the suivi aux client.
     */
    public function getSuiviAuxClient() {
        return $this->suiviAuxClient;
    }

    /**
     * Set the suivi aux client.
     *
     * @param bool $suiviAuxClient The suivi aux client.
     */
    public function setSuiviAuxClient($suiviAuxClient) {
        $this->suiviAuxClient = $suiviAuxClient;
        return $this;
    }
}
