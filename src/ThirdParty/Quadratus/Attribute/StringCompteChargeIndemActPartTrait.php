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
 * Compte charge indem act part trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteChargeIndemActPartTrait {

    /**
     * Compte charge indem act part.
     *
     * @var string
     */
    private $compteChargeIndemActPart;

    /**
     * Get the compte charge indem act part.
     *
     * @return string Returns the compte charge indem act part.
     */
    public function getCompteChargeIndemActPart() {
        return $this->compteChargeIndemActPart;
    }

    /**
     * Set the compte charge indem act part.
     *
     * @param string $compteChargeIndemActPart The compte charge indem act part.
     */
    public function setCompteChargeIndemActPart($compteChargeIndemActPart) {
        $this->compteChargeIndemActPart = $compteChargeIndemActPart;
        return $this;
    }
}
