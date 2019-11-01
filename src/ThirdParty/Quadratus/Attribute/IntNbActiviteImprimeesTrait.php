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
 * Nb activite imprimees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbActiviteImprimeesTrait {

    /**
     * Nb activite imprimees.
     *
     * @var int
     */
    private $nbActiviteImprimees;

    /**
     * Get the nb activite imprimees.
     *
     * @return int Returns the nb activite imprimees.
     */
    public function getNbActiviteImprimees() {
        return $this->nbActiviteImprimees;
    }

    /**
     * Set the nb activite imprimees.
     *
     * @param int $nbActiviteImprimees The nb activite imprimees.
     */
    public function setNbActiviteImprimees($nbActiviteImprimees) {
        $this->nbActiviteImprimees = $nbActiviteImprimees;
        return $this;
    }
}
