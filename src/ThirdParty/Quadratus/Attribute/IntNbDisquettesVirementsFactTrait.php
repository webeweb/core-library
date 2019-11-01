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
 * Nb disquettes virements fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDisquettesVirementsFactTrait {

    /**
     * Nb disquettes virements fact.
     *
     * @var int
     */
    private $nbDisquettesVirementsFact;

    /**
     * Get the nb disquettes virements fact.
     *
     * @return int Returns the nb disquettes virements fact.
     */
    public function getNbDisquettesVirementsFact() {
        return $this->nbDisquettesVirementsFact;
    }

    /**
     * Set the nb disquettes virements fact.
     *
     * @param int $nbDisquettesVirementsFact The nb disquettes virements fact.
     */
    public function setNbDisquettesVirementsFact($nbDisquettesVirementsFact) {
        $this->nbDisquettesVirementsFact = $nbDisquettesVirementsFact;
        return $this;
    }
}
