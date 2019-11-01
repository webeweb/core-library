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
 * z rbtrib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringzRbtribTrait {

    /**
     * z rbtrib.
     *
     * @var string
     */
    private $zRbtrib;

    /**
     * Get the z rbtrib.
     *
     * @return string Returns the z rbtrib.
     */
    public function getzRbtrib() {
        return $this->zRbtrib;
    }

    /**
     * Set the z rbtrib.
     *
     * @param string $zRbtrib The z rbtrib.
     */
    public function setzRbtrib($zRbtrib) {
        $this->zRbtrib = $zRbtrib;
        return $this;
    }
}
