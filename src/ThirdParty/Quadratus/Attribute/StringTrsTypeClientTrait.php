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
 * Trs type client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsTypeClientTrait {

    /**
     * Trs type client.
     *
     * @var string
     */
    private $trsTypeClient;

    /**
     * Get the trs type client.
     *
     * @return string Returns the trs type client.
     */
    public function getTrsTypeClient() {
        return $this->trsTypeClient;
    }

    /**
     * Set the trs type client.
     *
     * @param string $trsTypeClient The trs type client.
     */
    public function setTrsTypeClient($trsTypeClient) {
        $this->trsTypeClient = $trsTypeClient;
        return $this;
    }
}
