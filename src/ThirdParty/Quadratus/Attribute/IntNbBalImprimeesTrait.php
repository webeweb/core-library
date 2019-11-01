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
 * Nb bal imprimees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBalImprimeesTrait {

    /**
     * Nb bal imprimees.
     *
     * @var int
     */
    private $nbBalImprimees;

    /**
     * Get the nb bal imprimees.
     *
     * @return int Returns the nb bal imprimees.
     */
    public function getNbBalImprimees() {
        return $this->nbBalImprimees;
    }

    /**
     * Set the nb bal imprimees.
     *
     * @param int $nbBalImprimees The nb bal imprimees.
     */
    public function setNbBalImprimees($nbBalImprimees) {
        $this->nbBalImprimees = $nbBalImprimees;
        return $this;
    }
}
