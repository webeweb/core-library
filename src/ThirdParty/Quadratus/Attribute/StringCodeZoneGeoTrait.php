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
 * Code zone geo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeZoneGeoTrait {

    /**
     * Code zone geo.
     *
     * @var string
     */
    private $codeZoneGeo;

    /**
     * Get the code zone geo.
     *
     * @return string Returns the code zone geo.
     */
    public function getCodeZoneGeo() {
        return $this->codeZoneGeo;
    }

    /**
     * Set the code zone geo.
     *
     * @param string $codeZoneGeo The code zone geo.
     */
    public function setCodeZoneGeo($codeZoneGeo) {
        $this->codeZoneGeo = $codeZoneGeo;
        return $this;
    }
}
