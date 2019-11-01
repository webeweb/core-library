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
 * Modif client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModifClientTrait {

    /**
     * Modif client.
     *
     * @var string
     */
    private $modifClient;

    /**
     * Get the modif client.
     *
     * @return string Returns the modif client.
     */
    public function getModifClient() {
        return $this->modifClient;
    }

    /**
     * Set the modif client.
     *
     * @param string $modifClient The modif client.
     */
    public function setModifClient($modifClient) {
        $this->modifClient = $modifClient;
        return $this;
    }
}
