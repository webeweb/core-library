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
 * Somme base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSommeBaseTrait {

    /**
     * Somme base.
     *
     * @var float
     */
    private $sommeBase;

    /**
     * Get the somme base.
     *
     * @return float Returns the somme base.
     */
    public function getSommeBase() {
        return $this->sommeBase;
    }

    /**
     * Set the somme base.
     *
     * @param float $sommeBase The somme base.
     */
    public function setSommeBase($sommeBase) {
        $this->sommeBase = $sommeBase;
        return $this;
    }
}
