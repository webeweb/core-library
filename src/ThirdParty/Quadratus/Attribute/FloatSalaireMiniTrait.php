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
 * Salaire mini trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSalaireMiniTrait {

    /**
     * Salaire mini.
     *
     * @var float
     */
    private $salaireMini;

    /**
     * Get the salaire mini.
     *
     * @return float Returns the salaire mini.
     */
    public function getSalaireMini() {
        return $this->salaireMini;
    }

    /**
     * Set the salaire mini.
     *
     * @param float $salaireMini The salaire mini.
     */
    public function setSalaireMini($salaireMini) {
        $this->salaireMini = $salaireMini;
        return $this;
    }
}
