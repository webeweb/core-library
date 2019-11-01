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
 * Normal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNormalTrait {

    /**
     * Normal.
     *
     * @var float
     */
    private $normal;

    /**
     * Get the normal.
     *
     * @return float Returns the normal.
     */
    public function getNormal() {
        return $this->normal;
    }

    /**
     * Set the normal.
     *
     * @param float $normal The normal.
     */
    public function setNormal($normal) {
        $this->normal = $normal;
        return $this;
    }
}
