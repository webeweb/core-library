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
 * Jour depart echeance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntJourDepartEcheanceTrait {

    /**
     * Jour depart echeance.
     *
     * @var int
     */
    private $jourDepartEcheance;

    /**
     * Get the jour depart echeance.
     *
     * @return int Returns the jour depart echeance.
     */
    public function getJourDepartEcheance() {
        return $this->jourDepartEcheance;
    }

    /**
     * Set the jour depart echeance.
     *
     * @param int $jourDepartEcheance The jour depart echeance.
     */
    public function setJourDepartEcheance($jourDepartEcheance) {
        $this->jourDepartEcheance = $jourDepartEcheance;
        return $this;
    }
}
