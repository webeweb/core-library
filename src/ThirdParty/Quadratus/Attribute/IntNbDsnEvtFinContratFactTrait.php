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
 * Nb dsn evt fin contrat fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDsnEvtFinContratFactTrait {

    /**
     * Nb dsn evt fin contrat fact.
     *
     * @var int
     */
    private $nbDsnEvtFinContratFact;

    /**
     * Get the nb dsn evt fin contrat fact.
     *
     * @return int Returns the nb dsn evt fin contrat fact.
     */
    public function getNbDsnEvtFinContratFact() {
        return $this->nbDsnEvtFinContratFact;
    }

    /**
     * Set the nb dsn evt fin contrat fact.
     *
     * @param int $nbDsnEvtFinContratFact The nb dsn evt fin contrat fact.
     */
    public function setNbDsnEvtFinContratFact($nbDsnEvtFinContratFact) {
        $this->nbDsnEvtFinContratFact = $nbDsnEvtFinContratFact;
        return $this;
    }
}
