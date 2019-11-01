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
 * Suppl fam trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSupplFamTrait {

    /**
     * Suppl fam.
     *
     * @var float
     */
    private $supplFam;

    /**
     * Get the suppl fam.
     *
     * @return float Returns the suppl fam.
     */
    public function getSupplFam() {
        return $this->supplFam;
    }

    /**
     * Set the suppl fam.
     *
     * @param float $supplFam The suppl fam.
     */
    public function setSupplFam($supplFam) {
        $this->supplFam = $supplFam;
        return $this;
    }
}
