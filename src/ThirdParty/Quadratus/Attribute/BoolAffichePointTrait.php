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
 * Affiche point trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAffichePointTrait {

    /**
     * Affiche point.
     *
     * @var bool
     */
    private $affichePoint;

    /**
     * Get the affiche point.
     *
     * @return bool Returns the affiche point.
     */
    public function getAffichePoint() {
        return $this->affichePoint;
    }

    /**
     * Set the affiche point.
     *
     * @param bool $affichePoint The affiche point.
     */
    public function setAffichePoint($affichePoint) {
        $this->affichePoint = $affichePoint;
        return $this;
    }
}
