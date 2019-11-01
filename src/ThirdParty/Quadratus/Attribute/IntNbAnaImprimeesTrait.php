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
 * Nb ana imprimees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAnaImprimeesTrait {

    /**
     * Nb ana imprimees.
     *
     * @var int
     */
    private $nbAnaImprimees;

    /**
     * Get the nb ana imprimees.
     *
     * @return int Returns the nb ana imprimees.
     */
    public function getNbAnaImprimees() {
        return $this->nbAnaImprimees;
    }

    /**
     * Set the nb ana imprimees.
     *
     * @param int $nbAnaImprimees The nb ana imprimees.
     */
    public function setNbAnaImprimees($nbAnaImprimees) {
        $this->nbAnaImprimees = $nbAnaImprimees;
        return $this;
    }
}
