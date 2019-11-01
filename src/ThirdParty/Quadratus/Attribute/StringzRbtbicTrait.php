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
 * z rbtbic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringzRbtbicTrait {

    /**
     * z rbtbic.
     *
     * @var string
     */
    private $zRbtbic;

    /**
     * Get the z rbtbic.
     *
     * @return string Returns the z rbtbic.
     */
    public function getzRbtbic() {
        return $this->zRbtbic;
    }

    /**
     * Set the z rbtbic.
     *
     * @param string $zRbtbic The z rbtbic.
     */
    public function setzRbtbic($zRbtbic) {
        $this->zRbtbic = $zRbtbic;
        return $this;
    }
}
