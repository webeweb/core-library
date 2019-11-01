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
 * Beneficie cice trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBeneficieCiceTrait {

    /**
     * Beneficie cice.
     *
     * @var bool
     */
    private $beneficieCice;

    /**
     * Get the beneficie cice.
     *
     * @return bool Returns the beneficie cice.
     */
    public function getBeneficieCice() {
        return $this->beneficieCice;
    }

    /**
     * Set the beneficie cice.
     *
     * @param bool $beneficieCice The beneficie cice.
     */
    public function setBeneficieCice($beneficieCice) {
        $this->beneficieCice = $beneficieCice;
        return $this;
    }
}
