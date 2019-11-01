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
 * Compte escompte soumis tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteEscompteSoumisTvaTrait {

    /**
     * Compte escompte soumis tva.
     *
     * @var string
     */
    private $compteEscompteSoumisTva;

    /**
     * Get the compte escompte soumis tva.
     *
     * @return string Returns the compte escompte soumis tva.
     */
    public function getCompteEscompteSoumisTva() {
        return $this->compteEscompteSoumisTva;
    }

    /**
     * Set the compte escompte soumis tva.
     *
     * @param string $compteEscompteSoumisTva The compte escompte soumis tva.
     */
    public function setCompteEscompteSoumisTva($compteEscompteSoumisTva) {
        $this->compteEscompteSoumisTva = $compteEscompteSoumisTva;
        return $this;
    }
}
