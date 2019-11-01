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
 * Per reference salaires trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPerReferenceSalairesTrait {

    /**
     * Per reference salaires.
     *
     * @var float
     */
    private $perReferenceSalaires;

    /**
     * Get the per reference salaires.
     *
     * @return float Returns the per reference salaires.
     */
    public function getPerReferenceSalaires() {
        return $this->perReferenceSalaires;
    }

    /**
     * Set the per reference salaires.
     *
     * @param float $perReferenceSalaires The per reference salaires.
     */
    public function setPerReferenceSalaires($perReferenceSalaires) {
        $this->perReferenceSalaires = $perReferenceSalaires;
        return $this;
    }
}
