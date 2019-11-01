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
 * Nationalite cee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNationaliteCeeTrait {

    /**
     * Nationalite cee.
     *
     * @var bool
     */
    private $nationaliteCee;

    /**
     * Get the nationalite cee.
     *
     * @return bool Returns the nationalite cee.
     */
    public function getNationaliteCee() {
        return $this->nationaliteCee;
    }

    /**
     * Set the nationalite cee.
     *
     * @param bool $nationaliteCee The nationalite cee.
     */
    public function setNationaliteCee($nationaliteCee) {
        $this->nationaliteCee = $nationaliteCee;
        return $this;
    }
}
