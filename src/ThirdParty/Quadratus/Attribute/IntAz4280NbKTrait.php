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
 * Az4280 nb k trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAz4280NbKTrait {

    /**
     * Az4280 nb k.
     *
     * @var int
     */
    private $az4280NbK;

    /**
     * Get the az4280 nb k.
     *
     * @return int Returns the az4280 nb k.
     */
    public function getAz4280NbK() {
        return $this->az4280NbK;
    }

    /**
     * Set the az4280 nb k.
     *
     * @param int $az4280NbK The az4280 nb k.
     */
    public function setAz4280NbK($az4280NbK) {
        $this->az4280NbK = $az4280NbK;
        return $this;
    }
}
