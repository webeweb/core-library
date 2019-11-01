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
 * Nb jrn imprimees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbJrnImprimeesTrait {

    /**
     * Nb jrn imprimees.
     *
     * @var int
     */
    private $nbJrnImprimees;

    /**
     * Get the nb jrn imprimees.
     *
     * @return int Returns the nb jrn imprimees.
     */
    public function getNbJrnImprimees() {
        return $this->nbJrnImprimees;
    }

    /**
     * Set the nb jrn imprimees.
     *
     * @param int $nbJrnImprimees The nb jrn imprimees.
     */
    public function setNbJrnImprimees($nbJrnImprimees) {
        $this->nbJrnImprimees = $nbJrnImprimees;
        return $this;
    }
}
