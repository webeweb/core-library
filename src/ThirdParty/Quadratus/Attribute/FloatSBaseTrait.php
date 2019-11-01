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
 * S base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSBaseTrait {

    /**
     * S base.
     *
     * @var float
     */
    private $sBase;

    /**
     * Get the s base.
     *
     * @return float Returns the s base.
     */
    public function getSBase() {
        return $this->sBase;
    }

    /**
     * Set the s base.
     *
     * @param float $sBase The s base.
     */
    public function setSBase($sBase) {
        $this->sBase = $sBase;
        return $this;
    }
}
