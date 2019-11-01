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
 * Exercice courant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringExerciceCourantTrait {

    /**
     * Exercice courant.
     *
     * @var string
     */
    private $exerciceCourant;

    /**
     * Get the exercice courant.
     *
     * @return string Returns the exercice courant.
     */
    public function getExerciceCourant() {
        return $this->exerciceCourant;
    }

    /**
     * Set the exercice courant.
     *
     * @param string $exerciceCourant The exercice courant.
     */
    public function setExerciceCourant($exerciceCourant) {
        $this->exerciceCourant = $exerciceCourant;
        return $this;
    }
}
