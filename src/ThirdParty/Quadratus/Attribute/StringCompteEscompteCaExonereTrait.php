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
 * Compte escompte ca exonere trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteEscompteCaExonereTrait {

    /**
     * Compte escompte ca exonere.
     *
     * @var string
     */
    private $compteEscompteCaExonere;

    /**
     * Get the compte escompte ca exonere.
     *
     * @return string Returns the compte escompte ca exonere.
     */
    public function getCompteEscompteCaExonere() {
        return $this->compteEscompteCaExonere;
    }

    /**
     * Set the compte escompte ca exonere.
     *
     * @param string $compteEscompteCaExonere The compte escompte ca exonere.
     */
    public function setCompteEscompteCaExonere($compteEscompteCaExonere) {
        $this->compteEscompteCaExonere = $compteEscompteCaExonere;
        return $this;
    }
}
