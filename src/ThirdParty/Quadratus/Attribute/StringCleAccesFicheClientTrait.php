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
 * Cle acces fiche client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAccesFicheClientTrait {

    /**
     * Cle acces fiche client.
     *
     * @var string
     */
    private $cleAccesFicheClient;

    /**
     * Get the cle acces fiche client.
     *
     * @return string Returns the cle acces fiche client.
     */
    public function getCleAccesFicheClient() {
        return $this->cleAccesFicheClient;
    }

    /**
     * Set the cle acces fiche client.
     *
     * @param string $cleAccesFicheClient The cle acces fiche client.
     */
    public function setCleAccesFicheClient($cleAccesFicheClient) {
        $this->cleAccesFicheClient = $cleAccesFicheClient;
        return $this;
    }
}
