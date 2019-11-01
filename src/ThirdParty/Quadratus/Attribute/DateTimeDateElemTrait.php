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
 * Date elem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateElemTrait {

    /**
     * Date elem.
     *
     * @var DateTime|null
     */
    private $dateElem;

    /**
     * Get the date elem.
     *
     * @return DateTime|null Returns the date elem.
     */
    public function getDateElem() {
        return $this->dateElem;
    }

    /**
     * Set the date elem.
     *
     * @param DateTime|null $dateElem The date elem.
     */
    public function setDateElem(DateTime $dateElem = null) {
        $this->dateElem = $dateElem;
        return $this;
    }
}
