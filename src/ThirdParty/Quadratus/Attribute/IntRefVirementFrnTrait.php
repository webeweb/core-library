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
 * Ref virement frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntRefVirementFrnTrait {

    /**
     * Ref virement frn.
     *
     * @var int
     */
    private $refVirementFrn;

    /**
     * Get the ref virement frn.
     *
     * @return int Returns the ref virement frn.
     */
    public function getRefVirementFrn() {
        return $this->refVirementFrn;
    }

    /**
     * Set the ref virement frn.
     *
     * @param int $refVirementFrn The ref virement frn.
     */
    public function setRefVirementFrn($refVirementFrn) {
        $this->refVirementFrn = $refVirementFrn;
        return $this;
    }
}
