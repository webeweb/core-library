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
 * z7b taxe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz7bTaxeTrait {

    /**
     * z7b taxe.
     *
     * @var float
     */
    private $z7bTaxe;

    /**
     * Get the z7b taxe.
     *
     * @return float Returns the z7b taxe.
     */
    public function getz7bTaxe() {
        return $this->z7bTaxe;
    }

    /**
     * Set the z7b taxe.
     *
     * @param float $z7bTaxe The z7b taxe.
     */
    public function setz7bTaxe($z7bTaxe) {
        $this->z7bTaxe = $z7bTaxe;
        return $this;
    }
}
