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
 * z35 taxe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz35TaxeTrait {

    /**
     * z35 taxe.
     *
     * @var float
     */
    private $z35Taxe;

    /**
     * Get the z35 taxe.
     *
     * @return float Returns the z35 taxe.
     */
    public function getz35Taxe() {
        return $this->z35Taxe;
    }

    /**
     * Set the z35 taxe.
     *
     * @param float $z35Taxe The z35 taxe.
     */
    public function setz35Taxe($z35Taxe) {
        $this->z35Taxe = $z35Taxe;
        return $this;
    }
}
