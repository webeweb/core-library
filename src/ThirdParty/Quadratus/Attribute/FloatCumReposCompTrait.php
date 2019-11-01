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
 * Cum repos comp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumReposCompTrait {

    /**
     * Cum repos comp.
     *
     * @var float
     */
    private $cumReposComp;

    /**
     * Get the cum repos comp.
     *
     * @return float Returns the cum repos comp.
     */
    public function getCumReposComp() {
        return $this->cumReposComp;
    }

    /**
     * Set the cum repos comp.
     *
     * @param float $cumReposComp The cum repos comp.
     */
    public function setCumReposComp($cumReposComp) {
        $this->cumReposComp = $cumReposComp;
        return $this;
    }
}
