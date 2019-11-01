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
 * Categorie ticket resto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCategorieTicketRestoTrait {

    /**
     * Categorie ticket resto.
     *
     * @var string
     */
    private $categorieTicketResto;

    /**
     * Get the categorie ticket resto.
     *
     * @return string Returns the categorie ticket resto.
     */
    public function getCategorieTicketResto() {
        return $this->categorieTicketResto;
    }

    /**
     * Set the categorie ticket resto.
     *
     * @param string $categorieTicketResto The categorie ticket resto.
     */
    public function setCategorieTicketResto($categorieTicketResto) {
        $this->categorieTicketResto = $categorieTicketResto;
        return $this;
    }
}
