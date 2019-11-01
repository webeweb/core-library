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
 * Nombre mois exercice trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNombreMoisExerciceTrait {

    /**
     * Nombre mois exercice.
     *
     * @var string
     */
    private $nombreMoisExercice;

    /**
     * Get the nombre mois exercice.
     *
     * @return string Returns the nombre mois exercice.
     */
    public function getNombreMoisExercice() {
        return $this->nombreMoisExercice;
    }

    /**
     * Set the nombre mois exercice.
     *
     * @param string $nombreMoisExercice The nombre mois exercice.
     */
    public function setNombreMoisExercice($nombreMoisExercice) {
        $this->nombreMoisExercice = $nombreMoisExercice;
        return $this;
    }
}
