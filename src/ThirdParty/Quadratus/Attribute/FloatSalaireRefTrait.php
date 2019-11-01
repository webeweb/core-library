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
 * Salaire ref trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSalaireRefTrait {

    /**
     * Salaire ref.
     *
     * @var float
     */
    private $salaireRef;

    /**
     * Get the salaire ref.
     *
     * @return float Returns the salaire ref.
     */
    public function getSalaireRef() {
        return $this->salaireRef;
    }

    /**
     * Set the salaire ref.
     *
     * @param float $salaireRef The salaire ref.
     */
    public function setSalaireRef($salaireRef) {
        $this->salaireRef = $salaireRef;
        return $this;
    }
}
