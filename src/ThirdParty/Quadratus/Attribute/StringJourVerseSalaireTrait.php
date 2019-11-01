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
 * Jour verse salaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJourVerseSalaireTrait {

    /**
     * Jour verse salaire.
     *
     * @var string
     */
    private $jourVerseSalaire;

    /**
     * Get the jour verse salaire.
     *
     * @return string Returns the jour verse salaire.
     */
    public function getJourVerseSalaire() {
        return $this->jourVerseSalaire;
    }

    /**
     * Set the jour verse salaire.
     *
     * @param string $jourVerseSalaire The jour verse salaire.
     */
    public function setJourVerseSalaire($jourVerseSalaire) {
        $this->jourVerseSalaire = $jourVerseSalaire;
        return $this;
    }
}
