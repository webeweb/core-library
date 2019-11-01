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
 * Numero fiche controle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroFicheControleTrait {

    /**
     * Numero fiche controle.
     *
     * @var int
     */
    private $numeroFicheControle;

    /**
     * Get the numero fiche controle.
     *
     * @return int Returns the numero fiche controle.
     */
    public function getNumeroFicheControle() {
        return $this->numeroFicheControle;
    }

    /**
     * Set the numero fiche controle.
     *
     * @param int $numeroFicheControle The numero fiche controle.
     */
    public function setNumeroFicheControle($numeroFicheControle) {
        $this->numeroFicheControle = $numeroFicheControle;
        return $this;
    }
}
