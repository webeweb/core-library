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
 * Duree exercice1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDureeExercice1Trait {

    /**
     * Duree exercice1.
     *
     * @var string
     */
    private $dureeExercice1;

    /**
     * Get the duree exercice1.
     *
     * @return string Returns the duree exercice1.
     */
    public function getDureeExercice1() {
        return $this->dureeExercice1;
    }

    /**
     * Set the duree exercice1.
     *
     * @param string $dureeExercice1 The duree exercice1.
     */
    public function setDureeExercice1($dureeExercice1) {
        $this->dureeExercice1 = $dureeExercice1;
        return $this;
    }
}
