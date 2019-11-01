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
 * Mtt dont taxes assim trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMttDontTaxesAssimTrait {

    /**
     * Mtt dont taxes assim.
     *
     * @var float
     */
    private $mttDontTaxesAssim;

    /**
     * Get the mtt dont taxes assim.
     *
     * @return float Returns the mtt dont taxes assim.
     */
    public function getMttDontTaxesAssim() {
        return $this->mttDontTaxesAssim;
    }

    /**
     * Set the mtt dont taxes assim.
     *
     * @param float $mttDontTaxesAssim The mtt dont taxes assim.
     */
    public function setMttDontTaxesAssim($mttDontTaxesAssim) {
        $this->mttDontTaxesAssim = $mttDontTaxesAssim;
        return $this;
    }
}
