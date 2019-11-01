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
 * Nb dads editees fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDadsEditeesFactTrait {

    /**
     * Nb dads editees fact.
     *
     * @var int
     */
    private $nbDadsEditeesFact;

    /**
     * Get the nb dads editees fact.
     *
     * @return int Returns the nb dads editees fact.
     */
    public function getNbDadsEditeesFact() {
        return $this->nbDadsEditeesFact;
    }

    /**
     * Set the nb dads editees fact.
     *
     * @param int $nbDadsEditeesFact The nb dads editees fact.
     */
    public function setNbDadsEditeesFact($nbDadsEditeesFact) {
        $this->nbDadsEditeesFact = $nbDadsEditeesFact;
        return $this;
    }
}
