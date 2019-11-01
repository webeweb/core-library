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
 * Date naissance employe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateNaissanceEmployeTrait {

    /**
     * Date naissance employe.
     *
     * @var DateTime|null
     */
    private $dateNaissanceEmploye;

    /**
     * Get the date naissance employe.
     *
     * @return DateTime|null Returns the date naissance employe.
     */
    public function getDateNaissanceEmploye() {
        return $this->dateNaissanceEmploye;
    }

    /**
     * Set the date naissance employe.
     *
     * @param DateTime|null $dateNaissanceEmploye The date naissance employe.
     */
    public function setDateNaissanceEmploye(DateTime $dateNaissanceEmploye = null) {
        $this->dateNaissanceEmploye = $dateNaissanceEmploye;
        return $this;
    }
}
