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
 * Compte charge indem abs intemp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteChargeIndemAbsIntempTrait {

    /**
     * Compte charge indem abs intemp.
     *
     * @var string
     */
    private $compteChargeIndemAbsIntemp;

    /**
     * Get the compte charge indem abs intemp.
     *
     * @return string Returns the compte charge indem abs intemp.
     */
    public function getCompteChargeIndemAbsIntemp() {
        return $this->compteChargeIndemAbsIntemp;
    }

    /**
     * Set the compte charge indem abs intemp.
     *
     * @param string $compteChargeIndemAbsIntemp The compte charge indem abs intemp.
     */
    public function setCompteChargeIndemAbsIntemp($compteChargeIndemAbsIntemp) {
        $this->compteChargeIndemAbsIntemp = $compteChargeIndemAbsIntemp;
        return $this;
    }
}
