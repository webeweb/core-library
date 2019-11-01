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
 * Fin exercice trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFinExerciceTrait {

    /**
     * Fin exercice.
     *
     * @var DateTime|null
     */
    private $finExercice;

    /**
     * Get the fin exercice.
     *
     * @return DateTime|null Returns the fin exercice.
     */
    public function getFinExercice() {
        return $this->finExercice;
    }

    /**
     * Set the fin exercice.
     *
     * @param DateTime|null $finExercice The fin exercice.
     */
    public function setFinExercice(DateTime $finExercice = null) {
        $this->finExercice = $finExercice;
        return $this;
    }
}
