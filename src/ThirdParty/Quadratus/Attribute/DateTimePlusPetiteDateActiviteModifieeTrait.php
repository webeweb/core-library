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
 * Plus petite date activite modifiee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePlusPetiteDateActiviteModifieeTrait {

    /**
     * Plus petite date activite modifiee.
     *
     * @var DateTime|null
     */
    private $plusPetiteDateActiviteModifiee;

    /**
     * Get the plus petite date activite modifiee.
     *
     * @return DateTime|null Returns the plus petite date activite modifiee.
     */
    public function getPlusPetiteDateActiviteModifiee() {
        return $this->plusPetiteDateActiviteModifiee;
    }

    /**
     * Set the plus petite date activite modifiee.
     *
     * @param DateTime|null $plusPetiteDateActiviteModifiee The plus petite date activite modifiee.
     */
    public function setPlusPetiteDateActiviteModifiee(DateTime $plusPetiteDateActiviteModifiee = null) {
        $this->plusPetiteDateActiviteModifiee = $plusPetiteDateActiviteModifiee;
        return $this;
    }
}
