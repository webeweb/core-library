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
 * Date naiss trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateNaissTrait {

    /**
     * Date naiss.
     *
     * @var DateTime|null
     */
    private $dateNaiss;

    /**
     * Get the date naiss.
     *
     * @return DateTime|null Returns the date naiss.
     */
    public function getDateNaiss() {
        return $this->dateNaiss;
    }

    /**
     * Set the date naiss.
     *
     * @param DateTime|null $dateNaiss The date naiss.
     */
    public function setDateNaiss(DateTime $dateNaiss = null) {
        $this->dateNaiss = $dateNaiss;
        return $this;
    }
}
