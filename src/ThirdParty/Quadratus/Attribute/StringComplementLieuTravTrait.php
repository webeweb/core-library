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
 * Complement lieu trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringComplementLieuTravTrait {

    /**
     * Complement lieu trav.
     *
     * @var string
     */
    private $complementLieuTrav;

    /**
     * Get the complement lieu trav.
     *
     * @return string Returns the complement lieu trav.
     */
    public function getComplementLieuTrav() {
        return $this->complementLieuTrav;
    }

    /**
     * Set the complement lieu trav.
     *
     * @param string $complementLieuTrav The complement lieu trav.
     */
    public function setComplementLieuTrav($complementLieuTrav) {
        $this->complementLieuTrav = $complementLieuTrav;
        return $this;
    }
}
