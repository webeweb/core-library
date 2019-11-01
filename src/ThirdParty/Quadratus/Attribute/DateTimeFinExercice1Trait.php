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
 * Fin exercice1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFinExercice1Trait {

    /**
     * Fin exercice1.
     *
     * @var DateTime|null
     */
    private $finExercice1;

    /**
     * Get the fin exercice1.
     *
     * @return DateTime|null Returns the fin exercice1.
     */
    public function getFinExercice1() {
        return $this->finExercice1;
    }

    /**
     * Set the fin exercice1.
     *
     * @param DateTime|null $finExercice1 The fin exercice1.
     */
    public function setFinExercice1(DateTime $finExercice1 = null) {
        $this->finExercice1 = $finExercice1;
        return $this;
    }
}
