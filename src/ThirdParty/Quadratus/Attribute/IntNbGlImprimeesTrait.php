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
 * Nb gl imprimees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbGlImprimeesTrait {

    /**
     * Nb gl imprimees.
     *
     * @var int
     */
    private $nbGlImprimees;

    /**
     * Get the nb gl imprimees.
     *
     * @return int Returns the nb gl imprimees.
     */
    public function getNbGlImprimees() {
        return $this->nbGlImprimees;
    }

    /**
     * Set the nb gl imprimees.
     *
     * @param int $nbGlImprimees The nb gl imprimees.
     */
    public function setNbGlImprimees($nbGlImprimees) {
        $this->nbGlImprimees = $nbGlImprimees;
        return $this;
    }
}
