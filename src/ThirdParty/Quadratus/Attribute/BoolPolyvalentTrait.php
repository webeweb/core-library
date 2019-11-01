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
 * Polyvalent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPolyvalentTrait {

    /**
     * Polyvalent.
     *
     * @var bool
     */
    private $polyvalent;

    /**
     * Get the polyvalent.
     *
     * @return bool Returns the polyvalent.
     */
    public function getPolyvalent() {
        return $this->polyvalent;
    }

    /**
     * Set the polyvalent.
     *
     * @param bool $polyvalent The polyvalent.
     */
    public function setPolyvalent($polyvalent) {
        $this->polyvalent = $polyvalent;
        return $this;
    }
}
