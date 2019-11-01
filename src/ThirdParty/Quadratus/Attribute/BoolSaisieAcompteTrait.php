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
 * Saisie acompte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieAcompteTrait {

    /**
     * Saisie acompte.
     *
     * @var bool
     */
    private $saisieAcompte;

    /**
     * Get the saisie acompte.
     *
     * @return bool Returns the saisie acompte.
     */
    public function getSaisieAcompte() {
        return $this->saisieAcompte;
    }

    /**
     * Set the saisie acompte.
     *
     * @param bool $saisieAcompte The saisie acompte.
     */
    public function setSaisieAcompte($saisieAcompte) {
        $this->saisieAcompte = $saisieAcompte;
        return $this;
    }
}
