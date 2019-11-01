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
 * Date deb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebTrait {

    /**
     * Date deb.
     *
     * @var DateTime|null
     */
    private $dateDeb;

    /**
     * Get the date deb.
     *
     * @return DateTime|null Returns the date deb.
     */
    public function getDateDeb() {
        return $this->dateDeb;
    }

    /**
     * Set the date deb.
     *
     * @param DateTime|null $dateDeb The date deb.
     */
    public function setDateDeb(DateTime $dateDeb = null) {
        $this->dateDeb = $dateDeb;
        return $this;
    }
}
