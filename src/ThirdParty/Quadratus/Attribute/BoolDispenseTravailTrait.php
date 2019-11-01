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
 * Dispense travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDispenseTravailTrait {

    /**
     * Dispense travail.
     *
     * @var bool
     */
    private $dispenseTravail;

    /**
     * Get the dispense travail.
     *
     * @return bool Returns the dispense travail.
     */
    public function getDispenseTravail() {
        return $this->dispenseTravail;
    }

    /**
     * Set the dispense travail.
     *
     * @param bool $dispenseTravail The dispense travail.
     */
    public function setDispenseTravail($dispenseTravail) {
        $this->dispenseTravail = $dispenseTravail;
        return $this;
    }
}
