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
 * Chom partiel coeff indem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatChomPartielCoeffIndemTrait {

    /**
     * Chom partiel coeff indem.
     *
     * @var float
     */
    private $chomPartielCoeffIndem;

    /**
     * Get the chom partiel coeff indem.
     *
     * @return float Returns the chom partiel coeff indem.
     */
    public function getChomPartielCoeffIndem() {
        return $this->chomPartielCoeffIndem;
    }

    /**
     * Set the chom partiel coeff indem.
     *
     * @param float $chomPartielCoeffIndem The chom partiel coeff indem.
     */
    public function setChomPartielCoeffIndem($chomPartielCoeffIndem) {
        $this->chomPartielCoeffIndem = $chomPartielCoeffIndem;
        return $this;
    }
}
