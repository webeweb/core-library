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
 * Nb gl imprimees fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbGlImprimeesFactTrait {

    /**
     * Nb gl imprimees fact.
     *
     * @var int
     */
    private $nbGlImprimeesFact;

    /**
     * Get the nb gl imprimees fact.
     *
     * @return int Returns the nb gl imprimees fact.
     */
    public function getNbGlImprimeesFact() {
        return $this->nbGlImprimeesFact;
    }

    /**
     * Set the nb gl imprimees fact.
     *
     * @param int $nbGlImprimeesFact The nb gl imprimees fact.
     */
    public function setNbGlImprimeesFact($nbGlImprimeesFact) {
        $this->nbGlImprimeesFact = $nbGlImprimeesFact;
        return $this;
    }
}
