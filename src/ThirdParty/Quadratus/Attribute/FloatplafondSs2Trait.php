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
 * plafond ss2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatplafondSs2Trait {

    /**
     * plafond ss2.
     *
     * @var float
     */
    private $plafondSs2;

    /**
     * Get the plafond ss2.
     *
     * @return float Returns the plafond ss2.
     */
    public function getplafondSs2() {
        return $this->plafondSs2;
    }

    /**
     * Set the plafond ss2.
     *
     * @param float $plafondSs2 The plafond ss2.
     */
    public function setplafondSs2($plafondSs2) {
        $this->plafondSs2 = $plafondSs2;
        return $this;
    }
}
