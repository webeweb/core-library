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
 * Tp acces encours client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpAccesEncoursClientTrait {

    /**
     * Tp acces encours client.
     *
     * @var bool
     */
    private $tpAccesEncoursClient;

    /**
     * Get the tp acces encours client.
     *
     * @return bool Returns the tp acces encours client.
     */
    public function getTpAccesEncoursClient() {
        return $this->tpAccesEncoursClient;
    }

    /**
     * Set the tp acces encours client.
     *
     * @param bool $tpAccesEncoursClient The tp acces encours client.
     */
    public function setTpAccesEncoursClient($tpAccesEncoursClient) {
        $this->tpAccesEncoursClient = $tpAccesEncoursClient;
        return $this;
    }
}
