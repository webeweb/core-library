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
 * Date dern j mens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDernJMensTrait {

    /**
     * Date dern j mens.
     *
     * @var DateTime|null
     */
    private $dateDernJMens;

    /**
     * Get the date dern j mens.
     *
     * @return DateTime|null Returns the date dern j mens.
     */
    public function getDateDernJMens() {
        return $this->dateDernJMens;
    }

    /**
     * Set the date dern j mens.
     *
     * @param DateTime|null $dateDernJMens The date dern j mens.
     */
    public function setDateDernJMens(DateTime $dateDernJMens = null) {
        $this->dateDernJMens = $dateDernJMens;
        return $this;
    }
}
