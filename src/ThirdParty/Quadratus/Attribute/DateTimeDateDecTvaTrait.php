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
 * Date dec tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDecTvaTrait {

    /**
     * Date dec tva.
     *
     * @var DateTime|null
     */
    private $dateDecTva;

    /**
     * Get the date dec tva.
     *
     * @return DateTime|null Returns the date dec tva.
     */
    public function getDateDecTva() {
        return $this->dateDecTva;
    }

    /**
     * Set the date dec tva.
     *
     * @param DateTime|null $dateDecTva The date dec tva.
     */
    public function setDateDecTva(DateTime $dateDecTva = null) {
        $this->dateDecTva = $dateDecTva;
        return $this;
    }
}
