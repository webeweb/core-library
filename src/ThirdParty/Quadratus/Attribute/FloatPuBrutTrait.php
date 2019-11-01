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
 * Pu brut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPuBrutTrait {

    /**
     * Pu brut.
     *
     * @var float
     */
    private $puBrut;

    /**
     * Get the pu brut.
     *
     * @return float Returns the pu brut.
     */
    public function getPuBrut() {
        return $this->puBrut;
    }

    /**
     * Set the pu brut.
     *
     * @param float $puBrut The pu brut.
     */
    public function setPuBrut($puBrut) {
        $this->puBrut = $puBrut;
        return $this;
    }
}
