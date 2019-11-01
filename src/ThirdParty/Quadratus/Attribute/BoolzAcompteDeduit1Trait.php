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
 * z acompte deduit1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolzAcompteDeduit1Trait {

    /**
     * z acompte deduit1.
     *
     * @var bool
     */
    private $zAcompteDeduit1;

    /**
     * Get the z acompte deduit1.
     *
     * @return bool Returns the z acompte deduit1.
     */
    public function getzAcompteDeduit1() {
        return $this->zAcompteDeduit1;
    }

    /**
     * Set the z acompte deduit1.
     *
     * @param bool $zAcompteDeduit1 The z acompte deduit1.
     */
    public function setzAcompteDeduit1($zAcompteDeduit1) {
        $this->zAcompteDeduit1 = $zAcompteDeduit1;
        return $this;
    }
}
