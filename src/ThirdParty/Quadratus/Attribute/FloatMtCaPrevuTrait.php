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
 * Mt ca prevu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtCaPrevuTrait {

    /**
     * Mt ca prevu.
     *
     * @var float
     */
    private $mtCaPrevu;

    /**
     * Get the mt ca prevu.
     *
     * @return float Returns the mt ca prevu.
     */
    public function getMtCaPrevu() {
        return $this->mtCaPrevu;
    }

    /**
     * Set the mt ca prevu.
     *
     * @param float $mtCaPrevu The mt ca prevu.
     */
    public function setMtCaPrevu($mtCaPrevu) {
        $this->mtCaPrevu = $mtCaPrevu;
        return $this;
    }
}
