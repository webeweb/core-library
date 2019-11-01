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
 * Prix revient net trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixRevientNetTrait {

    /**
     * Prix revient net.
     *
     * @var float
     */
    private $prixRevientNet;

    /**
     * Get the prix revient net.
     *
     * @return float Returns the prix revient net.
     */
    public function getPrixRevientNet() {
        return $this->prixRevientNet;
    }

    /**
     * Set the prix revient net.
     *
     * @param float $prixRevientNet The prix revient net.
     */
    public function setPrixRevientNet($prixRevientNet) {
        $this->prixRevientNet = $prixRevientNet;
        return $this;
    }
}
