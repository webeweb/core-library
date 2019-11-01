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
 * Autorise saisie tps colonnes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAutoriseSaisieTpsColonnesTrait {

    /**
     * Autorise saisie tps colonnes.
     *
     * @var bool
     */
    private $autoriseSaisieTpsColonnes;

    /**
     * Get the autorise saisie tps colonnes.
     *
     * @return bool Returns the autorise saisie tps colonnes.
     */
    public function getAutoriseSaisieTpsColonnes() {
        return $this->autoriseSaisieTpsColonnes;
    }

    /**
     * Set the autorise saisie tps colonnes.
     *
     * @param bool $autoriseSaisieTpsColonnes The autorise saisie tps colonnes.
     */
    public function setAutoriseSaisieTpsColonnes($autoriseSaisieTpsColonnes) {
        $this->autoriseSaisieTpsColonnes = $autoriseSaisieTpsColonnes;
        return $this;
    }
}
