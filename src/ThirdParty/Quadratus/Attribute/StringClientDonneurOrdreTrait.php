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
 * Client donneur ordre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClientDonneurOrdreTrait {

    /**
     * Client donneur ordre.
     *
     * @var string
     */
    private $clientDonneurOrdre;

    /**
     * Get the client donneur ordre.
     *
     * @return string Returns the client donneur ordre.
     */
    public function getClientDonneurOrdre() {
        return $this->clientDonneurOrdre;
    }

    /**
     * Set the client donneur ordre.
     *
     * @param string $clientDonneurOrdre The client donneur ordre.
     */
    public function setClientDonneurOrdre($clientDonneurOrdre) {
        $this->clientDonneurOrdre = $clientDonneurOrdre;
        return $this;
    }
}
