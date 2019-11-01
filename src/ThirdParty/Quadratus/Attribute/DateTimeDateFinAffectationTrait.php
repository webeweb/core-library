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
 * Date fin affectation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinAffectationTrait {

    /**
     * Date fin affectation.
     *
     * @var DateTime|null
     */
    private $dateFinAffectation;

    /**
     * Get the date fin affectation.
     *
     * @return DateTime|null Returns the date fin affectation.
     */
    public function getDateFinAffectation() {
        return $this->dateFinAffectation;
    }

    /**
     * Set the date fin affectation.
     *
     * @param DateTime|null $dateFinAffectation The date fin affectation.
     */
    public function setDateFinAffectation(DateTime $dateFinAffectation = null) {
        $this->dateFinAffectation = $dateFinAffectation;
        return $this;
    }
}
