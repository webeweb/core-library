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
 * z acompte deduit2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolzAcompteDeduit2Trait {

    /**
     * z acompte deduit2.
     *
     * @var bool
     */
    private $zAcompteDeduit2;

    /**
     * Get the z acompte deduit2.
     *
     * @return bool Returns the z acompte deduit2.
     */
    public function getzAcompteDeduit2() {
        return $this->zAcompteDeduit2;
    }

    /**
     * Set the z acompte deduit2.
     *
     * @param bool $zAcompteDeduit2 The z acompte deduit2.
     */
    public function setzAcompteDeduit2($zAcompteDeduit2) {
        $this->zAcompteDeduit2 = $zAcompteDeduit2;
        return $this;
    }
}
