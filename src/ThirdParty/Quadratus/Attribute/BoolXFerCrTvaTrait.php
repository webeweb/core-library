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
 * X fer cr tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCrTvaTrait {

    /**
     * X fer cr tva.
     *
     * @var bool
     */
    private $xFerCrTva;

    /**
     * Get the x fer cr tva.
     *
     * @return bool Returns the x fer cr tva.
     */
    public function getXFerCrTva() {
        return $this->xFerCrTva;
    }

    /**
     * Set the x fer cr tva.
     *
     * @param bool $xFerCrTva The x fer cr tva.
     */
    public function setXFerCrTva($xFerCrTva) {
        $this->xFerCrTva = $xFerCrTva;
        return $this;
    }
}
