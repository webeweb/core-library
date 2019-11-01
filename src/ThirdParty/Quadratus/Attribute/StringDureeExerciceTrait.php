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
 * Duree exercice trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDureeExerciceTrait {

    /**
     * Duree exercice.
     *
     * @var string
     */
    private $dureeExercice;

    /**
     * Get the duree exercice.
     *
     * @return string Returns the duree exercice.
     */
    public function getDureeExercice() {
        return $this->dureeExercice;
    }

    /**
     * Set the duree exercice.
     *
     * @param string $dureeExercice The duree exercice.
     */
    public function setDureeExercice($dureeExercice) {
        $this->dureeExercice = $dureeExercice;
        return $this;
    }
}
