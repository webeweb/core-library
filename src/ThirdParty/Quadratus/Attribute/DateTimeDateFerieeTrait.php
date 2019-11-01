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
 * Date feriee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFerieeTrait {

    /**
     * Date feriee.
     *
     * @var DateTime|null
     */
    private $dateFeriee;

    /**
     * Get the date feriee.
     *
     * @return DateTime|null Returns the date feriee.
     */
    public function getDateFeriee() {
        return $this->dateFeriee;
    }

    /**
     * Set the date feriee.
     *
     * @param DateTime|null $dateFeriee The date feriee.
     */
    public function setDateFeriee(DateTime $dateFeriee = null) {
        $this->dateFeriee = $dateFeriee;
        return $this;
    }
}
