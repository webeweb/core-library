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
 * Salaire base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSalaireBaseTrait {

    /**
     * Salaire base.
     *
     * @var float
     */
    private $salaireBase;

    /**
     * Get the salaire base.
     *
     * @return float Returns the salaire base.
     */
    public function getSalaireBase() {
        return $this->salaireBase;
    }

    /**
     * Set the salaire base.
     *
     * @param float $salaireBase The salaire base.
     */
    public function setSalaireBase($salaireBase) {
        $this->salaireBase = $salaireBase;
        return $this;
    }
}
