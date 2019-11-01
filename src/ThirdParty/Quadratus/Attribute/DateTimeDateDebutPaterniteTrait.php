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
 * Date debut paternite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebutPaterniteTrait {

    /**
     * Date debut paternite.
     *
     * @var DateTime|null
     */
    private $dateDebutPaternite;

    /**
     * Get the date debut paternite.
     *
     * @return DateTime|null Returns the date debut paternite.
     */
    public function getDateDebutPaternite() {
        return $this->dateDebutPaternite;
    }

    /**
     * Set the date debut paternite.
     *
     * @param DateTime|null $dateDebutPaternite The date debut paternite.
     */
    public function setDateDebutPaternite(DateTime $dateDebutPaternite = null) {
        $this->dateDebutPaternite = $dateDebutPaternite;
        return $this;
    }
}
