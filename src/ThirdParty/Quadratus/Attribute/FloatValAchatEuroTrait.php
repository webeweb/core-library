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
 * Val achat euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValAchatEuroTrait {

    /**
     * Val achat euro.
     *
     * @var float
     */
    private $valAchatEuro;

    /**
     * Get the val achat euro.
     *
     * @return float Returns the val achat euro.
     */
    public function getValAchatEuro() {
        return $this->valAchatEuro;
    }

    /**
     * Set the val achat euro.
     *
     * @param float $valAchatEuro The val achat euro.
     */
    public function setValAchatEuro($valAchatEuro) {
        $this->valAchatEuro = $valAchatEuro;
        return $this;
    }
}
