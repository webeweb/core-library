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
 * Reference interne virement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringReferenceInterneVirementTrait {

    /**
     * Reference interne virement.
     *
     * @var string
     */
    private $referenceInterneVirement;

    /**
     * Get the reference interne virement.
     *
     * @return string Returns the reference interne virement.
     */
    public function getReferenceInterneVirement() {
        return $this->referenceInterneVirement;
    }

    /**
     * Set the reference interne virement.
     *
     * @param string $referenceInterneVirement The reference interne virement.
     */
    public function setReferenceInterneVirement($referenceInterneVirement) {
        $this->referenceInterneVirement = $referenceInterneVirement;
        return $this;
    }
}
