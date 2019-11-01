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
 * Fact negoce isolee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFactNegoceIsoleeTrait {

    /**
     * Fact negoce isolee.
     *
     * @var bool
     */
    private $factNegoceIsolee;

    /**
     * Get the fact negoce isolee.
     *
     * @return bool Returns the fact negoce isolee.
     */
    public function getFactNegoceIsolee() {
        return $this->factNegoceIsolee;
    }

    /**
     * Set the fact negoce isolee.
     *
     * @param bool $factNegoceIsolee The fact negoce isolee.
     */
    public function setFactNegoceIsolee($factNegoceIsolee) {
        $this->factNegoceIsolee = $factNegoceIsolee;
        return $this;
    }
}
