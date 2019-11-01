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
 * Fct saisie standard trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctSaisieStandardTrait {

    /**
     * Fct saisie standard.
     *
     * @var bool
     */
    private $fctSaisieStandard;

    /**
     * Get the fct saisie standard.
     *
     * @return bool Returns the fct saisie standard.
     */
    public function getFctSaisieStandard() {
        return $this->fctSaisieStandard;
    }

    /**
     * Set the fct saisie standard.
     *
     * @param bool $fctSaisieStandard The fct saisie standard.
     */
    public function setFctSaisieStandard($fctSaisieStandard) {
        $this->fctSaisieStandard = $fctSaisieStandard;
        return $this;
    }
}
