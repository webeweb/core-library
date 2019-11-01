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
 * Val achat frf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValAchatFrfTrait {

    /**
     * Val achat frf.
     *
     * @var float
     */
    private $valAchatFrf;

    /**
     * Get the val achat frf.
     *
     * @return float Returns the val achat frf.
     */
    public function getValAchatFrf() {
        return $this->valAchatFrf;
    }

    /**
     * Set the val achat frf.
     *
     * @param float $valAchatFrf The val achat frf.
     */
    public function setValAchatFrf($valAchatFrf) {
        $this->valAchatFrf = $valAchatFrf;
        return $this;
    }
}
