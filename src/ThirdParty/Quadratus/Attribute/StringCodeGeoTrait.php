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
 * Code geo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeGeoTrait {

    /**
     * Code geo.
     *
     * @var string
     */
    private $codeGeo;

    /**
     * Get the code geo.
     *
     * @return string Returns the code geo.
     */
    public function getCodeGeo() {
        return $this->codeGeo;
    }

    /**
     * Set the code geo.
     *
     * @param string $codeGeo The code geo.
     */
    public function setCodeGeo($codeGeo) {
        $this->codeGeo = $codeGeo;
        return $this;
    }
}
