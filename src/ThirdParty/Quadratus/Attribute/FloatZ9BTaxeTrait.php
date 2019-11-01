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
 * Z9 b taxe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ9BTaxeTrait {

    /**
     * Z9 b taxe.
     *
     * @var float
     */
    private $z9BTaxe;

    /**
     * Get the z9 b taxe.
     *
     * @return float Returns the z9 b taxe.
     */
    public function getZ9BTaxe() {
        return $this->z9BTaxe;
    }

    /**
     * Set the z9 b taxe.
     *
     * @param float $z9BTaxe The z9 b taxe.
     */
    public function setZ9BTaxe($z9BTaxe) {
        $this->z9BTaxe = $z9BTaxe;
        return $this;
    }
}
