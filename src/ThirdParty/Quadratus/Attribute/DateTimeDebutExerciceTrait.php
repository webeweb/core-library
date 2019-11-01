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
 * Debut exercice trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebutExerciceTrait {

    /**
     * Debut exercice.
     *
     * @var DateTime|null
     */
    private $debutExercice;

    /**
     * Get the debut exercice.
     *
     * @return DateTime|null Returns the debut exercice.
     */
    public function getDebutExercice() {
        return $this->debutExercice;
    }

    /**
     * Set the debut exercice.
     *
     * @param DateTime|null $debutExercice The debut exercice.
     */
    public function setDebutExercice(DateTime $debutExercice = null) {
        $this->debutExercice = $debutExercice;
        return $this;
    }
}
