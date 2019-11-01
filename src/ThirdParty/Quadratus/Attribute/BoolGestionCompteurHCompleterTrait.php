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
 * Gestion compteur h completer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionCompteurHCompleterTrait {

    /**
     * Gestion compteur h completer.
     *
     * @var bool
     */
    private $gestionCompteurHCompleter;

    /**
     * Get the gestion compteur h completer.
     *
     * @return bool Returns the gestion compteur h completer.
     */
    public function getGestionCompteurHCompleter() {
        return $this->gestionCompteurHCompleter;
    }

    /**
     * Set the gestion compteur h completer.
     *
     * @param bool $gestionCompteurHCompleter The gestion compteur h completer.
     */
    public function setGestionCompteurHCompleter($gestionCompteurHCompleter) {
        $this->gestionCompteurHCompleter = $gestionCompteurHCompleter;
        return $this;
    }
}
