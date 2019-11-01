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
 * Px km d trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPxKmDTrait {

    /**
     * Px km d.
     *
     * @var float
     */
    private $pxKmD;

    /**
     * Get the px km d.
     *
     * @return float Returns the px km d.
     */
    public function getPxKmD() {
        return $this->pxKmD;
    }

    /**
     * Set the px km d.
     *
     * @param float $pxKmD The px km d.
     */
    public function setPxKmD($pxKmD) {
        $this->pxKmD = $pxKmD;
        return $this;
    }
}
