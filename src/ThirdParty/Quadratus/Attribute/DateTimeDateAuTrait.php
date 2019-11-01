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
 * Date au trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAuTrait {

    /**
     * Date au.
     *
     * @var DateTime|null
     */
    private $dateAu;

    /**
     * Get the date au.
     *
     * @return DateTime|null Returns the date au.
     */
    public function getDateAu() {
        return $this->dateAu;
    }

    /**
     * Set the date au.
     *
     * @param DateTime|null $dateAu The date au.
     */
    public function setDateAu(DateTime $dateAu = null) {
        $this->dateAu = $dateAu;
        return $this;
    }
}
