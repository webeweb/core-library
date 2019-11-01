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
 * Annulation client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnnulationClientTrait {

    /**
     * Annulation client.
     *
     * @var bool
     */
    private $annulationClient;

    /**
     * Get the annulation client.
     *
     * @return bool Returns the annulation client.
     */
    public function getAnnulationClient() {
        return $this->annulationClient;
    }

    /**
     * Set the annulation client.
     *
     * @param bool $annulationClient The annulation client.
     */
    public function setAnnulationClient($annulationClient) {
        $this->annulationClient = $annulationClient;
        return $this;
    }
}
