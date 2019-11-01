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
 * Px km e trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPxKmETrait {

    /**
     * Px km e.
     *
     * @var float
     */
    private $pxKmE;

    /**
     * Get the px km e.
     *
     * @return float Returns the px km e.
     */
    public function getPxKmE() {
        return $this->pxKmE;
    }

    /**
     * Set the px km e.
     *
     * @param float $pxKmE The px km e.
     */
    public function setPxKmE($pxKmE) {
        $this->pxKmE = $pxKmE;
        return $this;
    }
}
