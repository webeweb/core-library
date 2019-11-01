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
 * z acompte deduit3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolzAcompteDeduit3Trait {

    /**
     * z acompte deduit3.
     *
     * @var bool
     */
    private $zAcompteDeduit3;

    /**
     * Get the z acompte deduit3.
     *
     * @return bool Returns the z acompte deduit3.
     */
    public function getzAcompteDeduit3() {
        return $this->zAcompteDeduit3;
    }

    /**
     * Set the z acompte deduit3.
     *
     * @param bool $zAcompteDeduit3 The z acompte deduit3.
     */
    public function setzAcompteDeduit3($zAcompteDeduit3) {
        $this->zAcompteDeduit3 = $zAcompteDeduit3;
        return $this;
    }
}
