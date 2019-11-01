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
 * Nb tab amort imprimes fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbTabAmortImprimesFactTrait {

    /**
     * Nb tab amort imprimes fact.
     *
     * @var int
     */
    private $nbTabAmortImprimesFact;

    /**
     * Get the nb tab amort imprimes fact.
     *
     * @return int Returns the nb tab amort imprimes fact.
     */
    public function getNbTabAmortImprimesFact() {
        return $this->nbTabAmortImprimesFact;
    }

    /**
     * Set the nb tab amort imprimes fact.
     *
     * @param int $nbTabAmortImprimesFact The nb tab amort imprimes fact.
     */
    public function setNbTabAmortImprimesFact($nbTabAmortImprimesFact) {
        $this->nbTabAmortImprimesFact = $nbTabAmortImprimesFact;
        return $this;
    }
}
