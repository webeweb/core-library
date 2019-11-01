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
 * Depuis deb fac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDepuisDebFacTrait {

    /**
     * Depuis deb fac.
     *
     * @var bool
     */
    private $depuisDebFac;

    /**
     * Get the depuis deb fac.
     *
     * @return bool Returns the depuis deb fac.
     */
    public function getDepuisDebFac() {
        return $this->depuisDebFac;
    }

    /**
     * Set the depuis deb fac.
     *
     * @param bool $depuisDebFac The depuis deb fac.
     */
    public function setDepuisDebFac($depuisDebFac) {
        $this->depuisDebFac = $depuisDebFac;
        return $this;
    }
}
