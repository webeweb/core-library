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
 * Ht avec saisie conges codes taches trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHtAvecSaisieCongesCodesTachesTrait {

    /**
     * Ht avec saisie conges codes taches.
     *
     * @var string
     */
    private $htAvecSaisieCongesCodesTaches;

    /**
     * Get the ht avec saisie conges codes taches.
     *
     * @return string Returns the ht avec saisie conges codes taches.
     */
    public function getHtAvecSaisieCongesCodesTaches() {
        return $this->htAvecSaisieCongesCodesTaches;
    }

    /**
     * Set the ht avec saisie conges codes taches.
     *
     * @param string $htAvecSaisieCongesCodesTaches The ht avec saisie conges codes taches.
     */
    public function setHtAvecSaisieCongesCodesTaches($htAvecSaisieCongesCodesTaches) {
        $this->htAvecSaisieCongesCodesTaches = $htAvecSaisieCongesCodesTaches;
        return $this;
    }
}
