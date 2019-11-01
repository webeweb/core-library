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
 * Adhesion revocable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAdhesionRevocableTrait {

    /**
     * Adhesion revocable.
     *
     * @var bool
     */
    private $adhesionRevocable;

    /**
     * Get the adhesion revocable.
     *
     * @return bool Returns the adhesion revocable.
     */
    public function getAdhesionRevocable() {
        return $this->adhesionRevocable;
    }

    /**
     * Set the adhesion revocable.
     *
     * @param bool $adhesionRevocable The adhesion revocable.
     */
    public function setAdhesionRevocable($adhesionRevocable) {
        $this->adhesionRevocable = $adhesionRevocable;
        return $this;
    }
}
