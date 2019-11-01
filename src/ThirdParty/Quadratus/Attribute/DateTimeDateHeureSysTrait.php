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
 * Date heure sys trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateHeureSysTrait {

    /**
     * Date heure sys.
     *
     * @var DateTime|null
     */
    private $dateHeureSys;

    /**
     * Get the date heure sys.
     *
     * @return DateTime|null Returns the date heure sys.
     */
    public function getDateHeureSys() {
        return $this->dateHeureSys;
    }

    /**
     * Set the date heure sys.
     *
     * @param DateTime|null $dateHeureSys The date heure sys.
     */
    public function setDateHeureSys(DateTime $dateHeureSys = null) {
        $this->dateHeureSys = $dateHeureSys;
        return $this;
    }
}
