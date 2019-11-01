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
 * Accident mois embauche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccidentMoisEmbaucheTrait {

    /**
     * Accident mois embauche.
     *
     * @var bool
     */
    private $accidentMoisEmbauche;

    /**
     * Get the accident mois embauche.
     *
     * @return bool Returns the accident mois embauche.
     */
    public function getAccidentMoisEmbauche() {
        return $this->accidentMoisEmbauche;
    }

    /**
     * Set the accident mois embauche.
     *
     * @param bool $accidentMoisEmbauche The accident mois embauche.
     */
    public function setAccidentMoisEmbauche($accidentMoisEmbauche) {
        $this->accidentMoisEmbauche = $accidentMoisEmbauche;
        return $this;
    }
}
