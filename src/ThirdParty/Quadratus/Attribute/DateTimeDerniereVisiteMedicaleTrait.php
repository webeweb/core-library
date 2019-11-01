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

use DateTime;

/**
 * Derniere visite medicale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDerniereVisiteMedicaleTrait {

    /**
     * Derniere visite medicale.
     *
     * @var DateTime|null
     */
    private $derniereVisiteMedicale;

    /**
     * Get the derniere visite medicale.
     *
     * @return DateTime|null Returns the derniere visite medicale.
     */
    public function getDerniereVisiteMedicale() {
        return $this->derniereVisiteMedicale;
    }

    /**
     * Set the derniere visite medicale.
     *
     * @param DateTime|null $derniereVisiteMedicale The derniere visite medicale.
     */
    public function setDerniereVisiteMedicale(DateTime $derniereVisiteMedicale = null) {
        $this->derniereVisiteMedicale = $derniereVisiteMedicale;
        return $this;
    }
}
