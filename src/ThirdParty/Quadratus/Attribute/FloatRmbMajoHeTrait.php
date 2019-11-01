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
 * Rmb majo he trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRmbMajoHeTrait {

    /**
     * Rmb majo he.
     *
     * @var float
     */
    private $rmbMajoHe;

    /**
     * Get the rmb majo he.
     *
     * @return float Returns the rmb majo he.
     */
    public function getRmbMajoHe() {
        return $this->rmbMajoHe;
    }

    /**
     * Set the rmb majo he.
     *
     * @param float $rmbMajoHe The rmb majo he.
     */
    public function setRmbMajoHe($rmbMajoHe) {
        $this->rmbMajoHe = $rmbMajoHe;
        return $this;
    }
}
