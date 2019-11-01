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
 * Az4228 mtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4228MttTrait {

    /**
     * Az4228 mtt.
     *
     * @var float
     */
    private $az4228Mtt;

    /**
     * Get the az4228 mtt.
     *
     * @return float Returns the az4228 mtt.
     */
    public function getAz4228Mtt() {
        return $this->az4228Mtt;
    }

    /**
     * Set the az4228 mtt.
     *
     * @param float $az4228Mtt The az4228 mtt.
     */
    public function setAz4228Mtt($az4228Mtt) {
        $this->az4228Mtt = $az4228Mtt;
        return $this;
    }
}
