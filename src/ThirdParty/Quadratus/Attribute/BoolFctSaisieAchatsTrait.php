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
 * Fct saisie achats trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctSaisieAchatsTrait {

    /**
     * Fct saisie achats.
     *
     * @var bool
     */
    private $fctSaisieAchats;

    /**
     * Get the fct saisie achats.
     *
     * @return bool Returns the fct saisie achats.
     */
    public function getFctSaisieAchats() {
        return $this->fctSaisieAchats;
    }

    /**
     * Set the fct saisie achats.
     *
     * @param bool $fctSaisieAchats The fct saisie achats.
     */
    public function setFctSaisieAchats($fctSaisieAchats) {
        $this->fctSaisieAchats = $fctSaisieAchats;
        return $this;
    }
}
