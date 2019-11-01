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
 * X fer type evenements trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerTypeEvenementsTrait {

    /**
     * X fer type evenements.
     *
     * @var bool
     */
    private $xFerTypeEvenements;

    /**
     * Get the x fer type evenements.
     *
     * @return bool Returns the x fer type evenements.
     */
    public function getXFerTypeEvenements() {
        return $this->xFerTypeEvenements;
    }

    /**
     * Set the x fer type evenements.
     *
     * @param bool $xFerTypeEvenements The x fer type evenements.
     */
    public function setXFerTypeEvenements($xFerTypeEvenements) {
        $this->xFerTypeEvenements = $xFerTypeEvenements;
        return $this;
    }
}
