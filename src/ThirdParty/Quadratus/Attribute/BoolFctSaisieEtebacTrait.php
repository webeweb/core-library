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
 * Fct saisie etebac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctSaisieEtebacTrait {

    /**
     * Fct saisie etebac.
     *
     * @var bool
     */
    private $fctSaisieEtebac;

    /**
     * Get the fct saisie etebac.
     *
     * @return bool Returns the fct saisie etebac.
     */
    public function getFctSaisieEtebac() {
        return $this->fctSaisieEtebac;
    }

    /**
     * Set the fct saisie etebac.
     *
     * @param bool $fctSaisieEtebac The fct saisie etebac.
     */
    public function setFctSaisieEtebac($fctSaisieEtebac) {
        $this->fctSaisieEtebac = $fctSaisieEtebac;
        return $this;
    }
}
