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
 * Mt aide ct aides trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtAideCtAidesTrait {

    /**
     * Mt aide ct aides.
     *
     * @var float
     */
    private $mtAideCtAides;

    /**
     * Get the mt aide ct aides.
     *
     * @return float Returns the mt aide ct aides.
     */
    public function getMtAideCtAides() {
        return $this->mtAideCtAides;
    }

    /**
     * Set the mt aide ct aides.
     *
     * @param float $mtAideCtAides The mt aide ct aides.
     */
    public function setMtAideCtAides($mtAideCtAides) {
        $this->mtAideCtAides = $mtAideCtAides;
        return $this;
    }
}
