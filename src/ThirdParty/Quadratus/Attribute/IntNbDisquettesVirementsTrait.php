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
 * Nb disquettes virements trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDisquettesVirementsTrait {

    /**
     * Nb disquettes virements.
     *
     * @var int
     */
    private $nbDisquettesVirements;

    /**
     * Get the nb disquettes virements.
     *
     * @return int Returns the nb disquettes virements.
     */
    public function getNbDisquettesVirements() {
        return $this->nbDisquettesVirements;
    }

    /**
     * Set the nb disquettes virements.
     *
     * @param int $nbDisquettesVirements The nb disquettes virements.
     */
    public function setNbDisquettesVirements($nbDisquettesVirements) {
        $this->nbDisquettesVirements = $nbDisquettesVirements;
        return $this;
    }
}
