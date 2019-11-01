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
 * Date affectation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAffectationTrait {

    /**
     * Date affectation.
     *
     * @var DateTime|null
     */
    private $dateAffectation;

    /**
     * Get the date affectation.
     *
     * @return DateTime|null Returns the date affectation.
     */
    public function getDateAffectation() {
        return $this->dateAffectation;
    }

    /**
     * Set the date affectation.
     *
     * @param DateTime|null $dateAffectation The date affectation.
     */
    public function setDateAffectation(DateTime $dateAffectation = null) {
        $this->dateAffectation = $dateAffectation;
        return $this;
    }
}
