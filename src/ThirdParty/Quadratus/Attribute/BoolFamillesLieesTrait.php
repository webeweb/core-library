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
 * Familles liees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFamillesLieesTrait {

    /**
     * Familles liees.
     *
     * @var bool
     */
    private $famillesLiees;

    /**
     * Get the familles liees.
     *
     * @return bool Returns the familles liees.
     */
    public function getFamillesLiees() {
        return $this->famillesLiees;
    }

    /**
     * Set the familles liees.
     *
     * @param bool $famillesLiees The familles liees.
     */
    public function setFamillesLiees($famillesLiees) {
        $this->famillesLiees = $famillesLiees;
        return $this;
    }
}
