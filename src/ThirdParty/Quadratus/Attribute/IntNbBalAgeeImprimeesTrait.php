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
 * Nb bal agee imprimees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBalAgeeImprimeesTrait {

    /**
     * Nb bal agee imprimees.
     *
     * @var int
     */
    private $nbBalAgeeImprimees;

    /**
     * Get the nb bal agee imprimees.
     *
     * @return int Returns the nb bal agee imprimees.
     */
    public function getNbBalAgeeImprimees() {
        return $this->nbBalAgeeImprimees;
    }

    /**
     * Set the nb bal agee imprimees.
     *
     * @param int $nbBalAgeeImprimees The nb bal agee imprimees.
     */
    public function setNbBalAgeeImprimees($nbBalAgeeImprimees) {
        $this->nbBalAgeeImprimees = $nbBalAgeeImprimees;
        return $this;
    }
}
