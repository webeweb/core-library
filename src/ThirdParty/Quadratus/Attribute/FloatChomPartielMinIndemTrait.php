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
 * Chom partiel min indem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatChomPartielMinIndemTrait {

    /**
     * Chom partiel min indem.
     *
     * @var float
     */
    private $chomPartielMinIndem;

    /**
     * Get the chom partiel min indem.
     *
     * @return float Returns the chom partiel min indem.
     */
    public function getChomPartielMinIndem() {
        return $this->chomPartielMinIndem;
    }

    /**
     * Set the chom partiel min indem.
     *
     * @param float $chomPartielMinIndem The chom partiel min indem.
     */
    public function setChomPartielMinIndem($chomPartielMinIndem) {
        $this->chomPartielMinIndem = $chomPartielMinIndem;
        return $this;
    }
}
