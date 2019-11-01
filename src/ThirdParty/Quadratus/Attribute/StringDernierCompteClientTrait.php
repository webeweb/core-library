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
 * Dernier compte client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDernierCompteClientTrait {

    /**
     * Dernier compte client.
     *
     * @var string
     */
    private $dernierCompteClient;

    /**
     * Get the dernier compte client.
     *
     * @return string Returns the dernier compte client.
     */
    public function getDernierCompteClient() {
        return $this->dernierCompteClient;
    }

    /**
     * Set the dernier compte client.
     *
     * @param string $dernierCompteClient The dernier compte client.
     */
    public function setDernierCompteClient($dernierCompteClient) {
        $this->dernierCompteClient = $dernierCompteClient;
        return $this;
    }
}
