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
 * Date naissance enfant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateNaissanceEnfantTrait {

    /**
     * Date naissance enfant.
     *
     * @var DateTime|null
     */
    private $dateNaissanceEnfant;

    /**
     * Get the date naissance enfant.
     *
     * @return DateTime|null Returns the date naissance enfant.
     */
    public function getDateNaissanceEnfant() {
        return $this->dateNaissanceEnfant;
    }

    /**
     * Set the date naissance enfant.
     *
     * @param DateTime|null $dateNaissanceEnfant The date naissance enfant.
     */
    public function setDateNaissanceEnfant(DateTime $dateNaissanceEnfant = null) {
        $this->dateNaissanceEnfant = $dateNaissanceEnfant;
        return $this;
    }
}
