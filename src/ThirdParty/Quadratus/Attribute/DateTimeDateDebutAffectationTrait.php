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
 * Date debut affectation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebutAffectationTrait {

    /**
     * Date debut affectation.
     *
     * @var DateTime|null
     */
    private $dateDebutAffectation;

    /**
     * Get the date debut affectation.
     *
     * @return DateTime|null Returns the date debut affectation.
     */
    public function getDateDebutAffectation() {
        return $this->dateDebutAffectation;
    }

    /**
     * Set the date debut affectation.
     *
     * @param DateTime|null $dateDebutAffectation The date debut affectation.
     */
    public function setDateDebutAffectation(DateTime $dateDebutAffectation = null) {
        $this->dateDebutAffectation = $dateDebutAffectation;
        return $this;
    }
}
