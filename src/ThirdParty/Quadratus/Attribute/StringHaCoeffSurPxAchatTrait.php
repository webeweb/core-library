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
 * Ha coeff sur px achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHaCoeffSurPxAchatTrait {

    /**
     * Ha coeff sur px achat.
     *
     * @var string
     */
    private $haCoeffSurPxAchat;

    /**
     * Get the ha coeff sur px achat.
     *
     * @return string Returns the ha coeff sur px achat.
     */
    public function getHaCoeffSurPxAchat() {
        return $this->haCoeffSurPxAchat;
    }

    /**
     * Set the ha coeff sur px achat.
     *
     * @param string $haCoeffSurPxAchat The ha coeff sur px achat.
     */
    public function setHaCoeffSurPxAchat($haCoeffSurPxAchat) {
        $this->haCoeffSurPxAchat = $haCoeffSurPxAchat;
        return $this;
    }
}
