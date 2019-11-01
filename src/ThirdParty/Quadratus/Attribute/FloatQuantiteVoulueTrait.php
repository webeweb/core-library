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
 * Quantite voulue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQuantiteVoulueTrait {

    /**
     * Quantite voulue.
     *
     * @var float
     */
    private $quantiteVoulue;

    /**
     * Get the quantite voulue.
     *
     * @return float Returns the quantite voulue.
     */
    public function getQuantiteVoulue() {
        return $this->quantiteVoulue;
    }

    /**
     * Set the quantite voulue.
     *
     * @param float $quantiteVoulue The quantite voulue.
     */
    public function setQuantiteVoulue($quantiteVoulue) {
        $this->quantiteVoulue = $quantiteVoulue;
        return $this;
    }
}
