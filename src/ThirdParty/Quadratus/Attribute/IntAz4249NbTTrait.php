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
 * Az4249 nb t trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAz4249NbTTrait {

    /**
     * Az4249 nb t.
     *
     * @var int
     */
    private $az4249NbT;

    /**
     * Get the az4249 nb t.
     *
     * @return int Returns the az4249 nb t.
     */
    public function getAz4249NbT() {
        return $this->az4249NbT;
    }

    /**
     * Set the az4249 nb t.
     *
     * @param int $az4249NbT The az4249 nb t.
     */
    public function setAz4249NbT($az4249NbT) {
        $this->az4249NbT = $az4249NbT;
        return $this;
    }
}
