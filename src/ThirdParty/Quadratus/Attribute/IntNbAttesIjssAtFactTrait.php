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
 * Nb attes ijss at fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAttesIjssAtFactTrait {

    /**
     * Nb attes ijss at fact.
     *
     * @var int
     */
    private $nbAttesIjssAtFact;

    /**
     * Get the nb attes ijss at fact.
     *
     * @return int Returns the nb attes ijss at fact.
     */
    public function getNbAttesIjssAtFact() {
        return $this->nbAttesIjssAtFact;
    }

    /**
     * Set the nb attes ijss at fact.
     *
     * @param int $nbAttesIjssAtFact The nb attes ijss at fact.
     */
    public function setNbAttesIjssAtFact($nbAttesIjssAtFact) {
        $this->nbAttesIjssAtFact = $nbAttesIjssAtFact;
        return $this;
    }
}
