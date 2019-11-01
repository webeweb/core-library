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
 * z5b taxe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz5bTaxeTrait {

    /**
     * z5b taxe.
     *
     * @var float
     */
    private $z5bTaxe;

    /**
     * Get the z5b taxe.
     *
     * @return float Returns the z5b taxe.
     */
    public function getz5bTaxe() {
        return $this->z5bTaxe;
    }

    /**
     * Set the z5b taxe.
     *
     * @param float $z5bTaxe The z5b taxe.
     */
    public function setz5bTaxe($z5bTaxe) {
        $this->z5bTaxe = $z5bTaxe;
        return $this;
    }
}
