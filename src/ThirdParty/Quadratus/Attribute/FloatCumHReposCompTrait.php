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
 * Cum h repos comp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumHReposCompTrait {

    /**
     * Cum h repos comp.
     *
     * @var float
     */
    private $cumHReposComp;

    /**
     * Get the cum h repos comp.
     *
     * @return float Returns the cum h repos comp.
     */
    public function getCumHReposComp() {
        return $this->cumHReposComp;
    }

    /**
     * Set the cum h repos comp.
     *
     * @param float $cumHReposComp The cum h repos comp.
     */
    public function setCumHReposComp($cumHReposComp) {
        $this->cumHReposComp = $cumHReposComp;
        return $this;
    }
}
