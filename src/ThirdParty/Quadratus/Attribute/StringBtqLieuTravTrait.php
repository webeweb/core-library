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
 * Btq lieu trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBtqLieuTravTrait {

    /**
     * Btq lieu trav.
     *
     * @var string
     */
    private $btqLieuTrav;

    /**
     * Get the btq lieu trav.
     *
     * @return string Returns the btq lieu trav.
     */
    public function getBtqLieuTrav() {
        return $this->btqLieuTrav;
    }

    /**
     * Set the btq lieu trav.
     *
     * @param string $btqLieuTrav The btq lieu trav.
     */
    public function setBtqLieuTrav($btqLieuTrav) {
        $this->btqLieuTrav = $btqLieuTrav;
        return $this;
    }
}
