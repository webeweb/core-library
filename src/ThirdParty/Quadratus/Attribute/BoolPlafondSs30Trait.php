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
 * Plafond ss30 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPlafondSs30Trait {

    /**
     * Plafond ss30.
     *
     * @var bool
     */
    private $plafondSs30;

    /**
     * Get the plafond ss30.
     *
     * @return bool Returns the plafond ss30.
     */
    public function getPlafondSs30() {
        return $this->plafondSs30;
    }

    /**
     * Set the plafond ss30.
     *
     * @param bool $plafondSs30 The plafond ss30.
     */
    public function setPlafondSs30($plafondSs30) {
        $this->plafondSs30 = $plafondSs30;
        return $this;
    }
}
