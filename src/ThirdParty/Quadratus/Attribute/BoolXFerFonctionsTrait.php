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
 * X fer fonctions trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerFonctionsTrait {

    /**
     * X fer fonctions.
     *
     * @var bool
     */
    private $xFerFonctions;

    /**
     * Get the x fer fonctions.
     *
     * @return bool Returns the x fer fonctions.
     */
    public function getXFerFonctions() {
        return $this->xFerFonctions;
    }

    /**
     * Set the x fer fonctions.
     *
     * @param bool $xFerFonctions The x fer fonctions.
     */
    public function setXFerFonctions($xFerFonctions) {
        $this->xFerFonctions = $xFerFonctions;
        return $this;
    }
}
