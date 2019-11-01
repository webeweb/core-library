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
 * Quantite nb dec2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntQuantiteNbDec2Trait {

    /**
     * Quantite nb dec2.
     *
     * @var int
     */
    private $quantiteNbDec2;

    /**
     * Get the quantite nb dec2.
     *
     * @return int Returns the quantite nb dec2.
     */
    public function getQuantiteNbDec2() {
        return $this->quantiteNbDec2;
    }

    /**
     * Set the quantite nb dec2.
     *
     * @param int $quantiteNbDec2 The quantite nb dec2.
     */
    public function setQuantiteNbDec2($quantiteNbDec2) {
        $this->quantiteNbDec2 = $quantiteNbDec2;
        return $this;
    }
}
