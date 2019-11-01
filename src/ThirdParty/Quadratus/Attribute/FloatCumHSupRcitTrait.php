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
 * Cum h sup rcit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumHSupRcitTrait {

    /**
     * Cum h sup rcit.
     *
     * @var float
     */
    private $cumHSupRcit;

    /**
     * Get the cum h sup rcit.
     *
     * @return float Returns the cum h sup rcit.
     */
    public function getCumHSupRcit() {
        return $this->cumHSupRcit;
    }

    /**
     * Set the cum h sup rcit.
     *
     * @param float $cumHSupRcit The cum h sup rcit.
     */
    public function setCumHSupRcit($cumHSupRcit) {
        $this->cumHSupRcit = $cumHSupRcit;
        return $this;
    }
}
