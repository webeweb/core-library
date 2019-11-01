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
 * Gestion pmag client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionPmagClientTrait {

    /**
     * Gestion pmag client.
     *
     * @var bool
     */
    private $gestionPmagClient;

    /**
     * Get the gestion pmag client.
     *
     * @return bool Returns the gestion pmag client.
     */
    public function getGestionPmagClient() {
        return $this->gestionPmagClient;
    }

    /**
     * Set the gestion pmag client.
     *
     * @param bool $gestionPmagClient The gestion pmag client.
     */
    public function setGestionPmagClient($gestionPmagClient) {
        $this->gestionPmagClient = $gestionPmagClient;
        return $this;
    }
}
