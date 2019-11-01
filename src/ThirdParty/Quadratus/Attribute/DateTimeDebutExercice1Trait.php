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

use DateTime;

/**
 * Debut exercice1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebutExercice1Trait {

    /**
     * Debut exercice1.
     *
     * @var DateTime|null
     */
    private $debutExercice1;

    /**
     * Get the debut exercice1.
     *
     * @return DateTime|null Returns the debut exercice1.
     */
    public function getDebutExercice1() {
        return $this->debutExercice1;
    }

    /**
     * Set the debut exercice1.
     *
     * @param DateTime|null $debutExercice1 The debut exercice1.
     */
    public function setDebutExercice1(DateTime $debutExercice1 = null) {
        $this->debutExercice1 = $debutExercice1;
        return $this;
    }
}
