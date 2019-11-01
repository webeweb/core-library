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
 * Quantite nb dec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntQuantiteNbDecTrait {

    /**
     * Quantite nb dec.
     *
     * @var int
     */
    private $quantiteNbDec;

    /**
     * Get the quantite nb dec.
     *
     * @return int Returns the quantite nb dec.
     */
    public function getQuantiteNbDec() {
        return $this->quantiteNbDec;
    }

    /**
     * Set the quantite nb dec.
     *
     * @param int $quantiteNbDec The quantite nb dec.
     */
    public function setQuantiteNbDec($quantiteNbDec) {
        $this->quantiteNbDec = $quantiteNbDec;
        return $this;
    }
}
