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
 * z rbt qualite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringzRbtQualiteTrait {

    /**
     * z rbt qualite.
     *
     * @var string
     */
    private $zRbtQualite;

    /**
     * Get the z rbt qualite.
     *
     * @return string Returns the z rbt qualite.
     */
    public function getzRbtQualite() {
        return $this->zRbtQualite;
    }

    /**
     * Set the z rbt qualite.
     *
     * @param string $zRbtQualite The z rbt qualite.
     */
    public function setzRbtQualite($zRbtQualite) {
        $this->zRbtQualite = $zRbtQualite;
        return $this;
    }
}
