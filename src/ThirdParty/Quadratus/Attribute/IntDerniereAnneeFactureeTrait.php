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
 * Derniere annee facturee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDerniereAnneeFactureeTrait {

    /**
     * Derniere annee facturee.
     *
     * @var int
     */
    private $derniereAnneeFacturee;

    /**
     * Get the derniere annee facturee.
     *
     * @return int Returns the derniere annee facturee.
     */
    public function getDerniereAnneeFacturee() {
        return $this->derniereAnneeFacturee;
    }

    /**
     * Set the derniere annee facturee.
     *
     * @param int $derniereAnneeFacturee The derniere annee facturee.
     */
    public function setDerniereAnneeFacturee($derniereAnneeFacturee) {
        $this->derniereAnneeFacturee = $derniereAnneeFacturee;
        return $this;
    }
}
