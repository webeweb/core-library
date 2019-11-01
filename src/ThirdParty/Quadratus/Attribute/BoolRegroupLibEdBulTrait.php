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
 * Regroup lib ed bul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRegroupLibEdBulTrait {

    /**
     * Regroup lib ed bul.
     *
     * @var bool
     */
    private $regroupLibEdBul;

    /**
     * Get the regroup lib ed bul.
     *
     * @return bool Returns the regroup lib ed bul.
     */
    public function getRegroupLibEdBul() {
        return $this->regroupLibEdBul;
    }

    /**
     * Set the regroup lib ed bul.
     *
     * @param bool $regroupLibEdBul The regroup lib ed bul.
     */
    public function setRegroupLibEdBul($regroupLibEdBul) {
        $this->regroupLibEdBul = $regroupLibEdBul;
        return $this;
    }
}
