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
 * H theo trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHTheoTravTrait {

    /**
     * H theo trav.
     *
     * @var float
     */
    private $hTheoTrav;

    /**
     * Get the h theo trav.
     *
     * @return float Returns the h theo trav.
     */
    public function getHTheoTrav() {
        return $this->hTheoTrav;
    }

    /**
     * Set the h theo trav.
     *
     * @param float $hTheoTrav The h theo trav.
     */
    public function setHTheoTrav($hTheoTrav) {
        $this->hTheoTrav = $hTheoTrav;
        return $this;
    }
}
