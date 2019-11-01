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
 * Franchise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFranchiseTrait {

    /**
     * Franchise.
     *
     * @var bool
     */
    private $franchise;

    /**
     * Get the franchise.
     *
     * @return bool Returns the franchise.
     */
    public function getFranchise() {
        return $this->franchise;
    }

    /**
     * Set the franchise.
     *
     * @param bool $franchise The franchise.
     */
    public function setFranchise($franchise) {
        $this->franchise = $franchise;
        return $this;
    }
}
