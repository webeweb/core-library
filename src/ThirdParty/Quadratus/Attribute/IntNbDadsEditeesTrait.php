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
 * Nb dads editees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDadsEditeesTrait {

    /**
     * Nb dads editees.
     *
     * @var int
     */
    private $nbDadsEditees;

    /**
     * Get the nb dads editees.
     *
     * @return int Returns the nb dads editees.
     */
    public function getNbDadsEditees() {
        return $this->nbDadsEditees;
    }

    /**
     * Set the nb dads editees.
     *
     * @param int $nbDadsEditees The nb dads editees.
     */
    public function setNbDadsEditees($nbDadsEditees) {
        $this->nbDadsEditees = $nbDadsEditees;
        return $this;
    }
}
