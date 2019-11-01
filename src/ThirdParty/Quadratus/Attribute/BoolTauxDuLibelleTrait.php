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
 * Taux du libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTauxDuLibelleTrait {

    /**
     * Taux du libelle.
     *
     * @var bool
     */
    private $tauxDuLibelle;

    /**
     * Get the taux du libelle.
     *
     * @return bool Returns the taux du libelle.
     */
    public function getTauxDuLibelle() {
        return $this->tauxDuLibelle;
    }

    /**
     * Set the taux du libelle.
     *
     * @param bool $tauxDuLibelle The taux du libelle.
     */
    public function setTauxDuLibelle($tauxDuLibelle) {
        $this->tauxDuLibelle = $tauxDuLibelle;
        return $this;
    }
}
