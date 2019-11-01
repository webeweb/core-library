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
 * Az4279 nb k trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAz4279NbKTrait {

    /**
     * Az4279 nb k.
     *
     * @var int
     */
    private $az4279NbK;

    /**
     * Get the az4279 nb k.
     *
     * @return int Returns the az4279 nb k.
     */
    public function getAz4279NbK() {
        return $this->az4279NbK;
    }

    /**
     * Set the az4279 nb k.
     *
     * @param int $az4279NbK The az4279 nb k.
     */
    public function setAz4279NbK($az4279NbK) {
        $this->az4279NbK = $az4279NbK;
        return $this;
    }
}
