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
 * Saisie temps nb j apres trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntSaisieTempsNbJApresTrait {

    /**
     * Saisie temps nb j apres.
     *
     * @var int
     */
    private $saisieTempsNbJApres;

    /**
     * Get the saisie temps nb j apres.
     *
     * @return int Returns the saisie temps nb j apres.
     */
    public function getSaisieTempsNbJApres() {
        return $this->saisieTempsNbJApres;
    }

    /**
     * Set the saisie temps nb j apres.
     *
     * @param int $saisieTempsNbJApres The saisie temps nb j apres.
     */
    public function setSaisieTempsNbJApres($saisieTempsNbJApres) {
        $this->saisieTempsNbJApres = $saisieTempsNbJApres;
        return $this;
    }
}
