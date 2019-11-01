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
 * X fer dos paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerDosPaieTrait {

    /**
     * X fer dos paie.
     *
     * @var bool
     */
    private $xFerDosPaie;

    /**
     * Get the x fer dos paie.
     *
     * @return bool Returns the x fer dos paie.
     */
    public function getXFerDosPaie() {
        return $this->xFerDosPaie;
    }

    /**
     * Set the x fer dos paie.
     *
     * @param bool $xFerDosPaie The x fer dos paie.
     */
    public function setXFerDosPaie($xFerDosPaie) {
        $this->xFerDosPaie = $xFerDosPaie;
        return $this;
    }
}
