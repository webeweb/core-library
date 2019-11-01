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
 * Nb attes assedic fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAttesAssedicFactTrait {

    /**
     * Nb attes assedic fact.
     *
     * @var int
     */
    private $nbAttesAssedicFact;

    /**
     * Get the nb attes assedic fact.
     *
     * @return int Returns the nb attes assedic fact.
     */
    public function getNbAttesAssedicFact() {
        return $this->nbAttesAssedicFact;
    }

    /**
     * Set the nb attes assedic fact.
     *
     * @param int $nbAttesAssedicFact The nb attes assedic fact.
     */
    public function setNbAttesAssedicFact($nbAttesAssedicFact) {
        $this->nbAttesAssedicFact = $nbAttesAssedicFact;
        return $this;
    }
}
