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
 * X fer reglements trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerReglementsTrait {

    /**
     * X fer reglements.
     *
     * @var bool
     */
    private $xFerReglements;

    /**
     * Get the x fer reglements.
     *
     * @return bool Returns the x fer reglements.
     */
    public function getXFerReglements() {
        return $this->xFerReglements;
    }

    /**
     * Set the x fer reglements.
     *
     * @param bool $xFerReglements The x fer reglements.
     */
    public function setXFerReglements($xFerReglements) {
        $this->xFerReglements = $xFerReglements;
        return $this;
    }
}
