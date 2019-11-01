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
 * z32 taxe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz32TaxeTrait {

    /**
     * z32 taxe.
     *
     * @var float
     */
    private $z32Taxe;

    /**
     * Get the z32 taxe.
     *
     * @return float Returns the z32 taxe.
     */
    public function getz32Taxe() {
        return $this->z32Taxe;
    }

    /**
     * Set the z32 taxe.
     *
     * @param float $z32Taxe The z32 taxe.
     */
    public function setz32Taxe($z32Taxe) {
        $this->z32Taxe = $z32Taxe;
        return $this;
    }
}
