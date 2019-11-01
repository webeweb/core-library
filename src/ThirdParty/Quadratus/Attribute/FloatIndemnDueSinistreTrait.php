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
 * Indemn due sinistre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnDueSinistreTrait {

    /**
     * Indemn due sinistre.
     *
     * @var float
     */
    private $indemnDueSinistre;

    /**
     * Get the indemn due sinistre.
     *
     * @return float Returns the indemn due sinistre.
     */
    public function getIndemnDueSinistre() {
        return $this->indemnDueSinistre;
    }

    /**
     * Set the indemn due sinistre.
     *
     * @param float $indemnDueSinistre The indemn due sinistre.
     */
    public function setIndemnDueSinistre($indemnDueSinistre) {
        $this->indemnDueSinistre = $indemnDueSinistre;
        return $this;
    }
}
