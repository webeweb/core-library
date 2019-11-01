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
 * Mardi a mdeb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMardiAMdebTrait {

    /**
     * Mardi a mdeb.
     *
     * @var DateTime|null
     */
    private $mardiAMdeb;

    /**
     * Get the mardi a mdeb.
     *
     * @return DateTime|null Returns the mardi a mdeb.
     */
    public function getMardiAMdeb() {
        return $this->mardiAMdeb;
    }

    /**
     * Set the mardi a mdeb.
     *
     * @param DateTime|null $mardiAMdeb The mardi a mdeb.
     */
    public function setMardiAMdeb(DateTime $mardiAMdeb = null) {
        $this->mardiAMdeb = $mardiAMdeb;
        return $this;
    }
}
