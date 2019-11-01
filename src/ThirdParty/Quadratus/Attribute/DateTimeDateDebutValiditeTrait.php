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
 * Date debut validite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebutValiditeTrait {

    /**
     * Date debut validite.
     *
     * @var DateTime|null
     */
    private $dateDebutValidite;

    /**
     * Get the date debut validite.
     *
     * @return DateTime|null Returns the date debut validite.
     */
    public function getDateDebutValidite() {
        return $this->dateDebutValidite;
    }

    /**
     * Set the date debut validite.
     *
     * @param DateTime|null $dateDebutValidite The date debut validite.
     */
    public function setDateDebutValidite(DateTime $dateDebutValidite = null) {
        $this->dateDebutValidite = $dateDebutValidite;
        return $this;
    }
}
