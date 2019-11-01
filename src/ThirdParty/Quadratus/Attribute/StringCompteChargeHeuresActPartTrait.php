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
 * Compte charge heures act part trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteChargeHeuresActPartTrait {

    /**
     * Compte charge heures act part.
     *
     * @var string
     */
    private $compteChargeHeuresActPart;

    /**
     * Get the compte charge heures act part.
     *
     * @return string Returns the compte charge heures act part.
     */
    public function getCompteChargeHeuresActPart() {
        return $this->compteChargeHeuresActPart;
    }

    /**
     * Set the compte charge heures act part.
     *
     * @param string $compteChargeHeuresActPart The compte charge heures act part.
     */
    public function setCompteChargeHeuresActPart($compteChargeHeuresActPart) {
        $this->compteChargeHeuresActPart = $compteChargeHeuresActPart;
        return $this;
    }
}
