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
 * z35 b taxe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz35BTaxeTrait {

    /**
     * z35 b taxe.
     *
     * @var float
     */
    private $z35BTaxe;

    /**
     * Get the z35 b taxe.
     *
     * @return float Returns the z35 b taxe.
     */
    public function getz35BTaxe() {
        return $this->z35BTaxe;
    }

    /**
     * Set the z35 b taxe.
     *
     * @param float $z35BTaxe The z35 b taxe.
     */
    public function setz35BTaxe($z35BTaxe) {
        $this->z35BTaxe = $z35BTaxe;
        return $this;
    }
}
