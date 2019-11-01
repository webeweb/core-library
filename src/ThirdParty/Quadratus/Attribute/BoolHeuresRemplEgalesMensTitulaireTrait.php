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
 * Heures rempl egales mens titulaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHeuresRemplEgalesMensTitulaireTrait {

    /**
     * Heures rempl egales mens titulaire.
     *
     * @var bool
     */
    private $heuresRemplEgalesMensTitulaire;

    /**
     * Get the heures rempl egales mens titulaire.
     *
     * @return bool Returns the heures rempl egales mens titulaire.
     */
    public function getHeuresRemplEgalesMensTitulaire() {
        return $this->heuresRemplEgalesMensTitulaire;
    }

    /**
     * Set the heures rempl egales mens titulaire.
     *
     * @param bool $heuresRemplEgalesMensTitulaire The heures rempl egales mens titulaire.
     */
    public function setHeuresRemplEgalesMensTitulaire($heuresRemplEgalesMensTitulaire) {
        $this->heuresRemplEgalesMensTitulaire = $heuresRemplEgalesMensTitulaire;
        return $this;
    }
}
