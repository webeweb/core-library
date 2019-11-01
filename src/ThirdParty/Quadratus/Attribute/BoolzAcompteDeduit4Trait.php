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
 * z acompte deduit4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolzAcompteDeduit4Trait {

    /**
     * z acompte deduit4.
     *
     * @var bool
     */
    private $zAcompteDeduit4;

    /**
     * Get the z acompte deduit4.
     *
     * @return bool Returns the z acompte deduit4.
     */
    public function getzAcompteDeduit4() {
        return $this->zAcompteDeduit4;
    }

    /**
     * Set the z acompte deduit4.
     *
     * @param bool $zAcompteDeduit4 The z acompte deduit4.
     */
    public function setzAcompteDeduit4($zAcompteDeduit4) {
        $this->zAcompteDeduit4 = $zAcompteDeduit4;
        return $this;
    }
}
