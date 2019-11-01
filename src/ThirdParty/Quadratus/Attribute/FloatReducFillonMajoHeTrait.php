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
 * Reduc fillon majo he trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatReducFillonMajoHeTrait {

    /**
     * Reduc fillon majo he.
     *
     * @var float
     */
    private $reducFillonMajoHe;

    /**
     * Get the reduc fillon majo he.
     *
     * @return float Returns the reduc fillon majo he.
     */
    public function getReducFillonMajoHe() {
        return $this->reducFillonMajoHe;
    }

    /**
     * Set the reduc fillon majo he.
     *
     * @param float $reducFillonMajoHe The reduc fillon majo he.
     */
    public function setReducFillonMajoHe($reducFillonMajoHe) {
        $this->reducFillonMajoHe = $reducFillonMajoHe;
        return $this;
    }
}
