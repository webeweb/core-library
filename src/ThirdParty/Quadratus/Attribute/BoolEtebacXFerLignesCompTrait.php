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
 * Etebac x fer lignes comp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEtebacXFerLignesCompTrait {

    /**
     * Etebac x fer lignes comp.
     *
     * @var bool
     */
    private $etebacXFerLignesComp;

    /**
     * Get the etebac x fer lignes comp.
     *
     * @return bool Returns the etebac x fer lignes comp.
     */
    public function getEtebacXFerLignesComp() {
        return $this->etebacXFerLignesComp;
    }

    /**
     * Set the etebac x fer lignes comp.
     *
     * @param bool $etebacXFerLignesComp The etebac x fer lignes comp.
     */
    public function setEtebacXFerLignesComp($etebacXFerLignesComp) {
        $this->etebacXFerLignesComp = $etebacXFerLignesComp;
        return $this;
    }
}
