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
 * Btp sal moyen trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBtpSalMoyenTrait {

    /**
     * Btp sal moyen.
     *
     * @var float
     */
    private $btpSalMoyen;

    /**
     * Get the btp sal moyen.
     *
     * @return float Returns the btp sal moyen.
     */
    public function getBtpSalMoyen() {
        return $this->btpSalMoyen;
    }

    /**
     * Set the btp sal moyen.
     *
     * @param float $btpSalMoyen The btp sal moyen.
     */
    public function setBtpSalMoyen($btpSalMoyen) {
        $this->btpSalMoyen = $btpSalMoyen;
        return $this;
    }
}
