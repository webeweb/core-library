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
 * Nb jrn imprimees fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbJrnImprimeesFactTrait {

    /**
     * Nb jrn imprimees fact.
     *
     * @var int
     */
    private $nbJrnImprimeesFact;

    /**
     * Get the nb jrn imprimees fact.
     *
     * @return int Returns the nb jrn imprimees fact.
     */
    public function getNbJrnImprimeesFact() {
        return $this->nbJrnImprimeesFact;
    }

    /**
     * Set the nb jrn imprimees fact.
     *
     * @param int $nbJrnImprimeesFact The nb jrn imprimees fact.
     */
    public function setNbJrnImprimeesFact($nbJrnImprimeesFact) {
        $this->nbJrnImprimeesFact = $nbJrnImprimeesFact;
        return $this;
    }
}
