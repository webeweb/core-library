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
 * Lundi a mdeb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeLundiAMdebTrait {

    /**
     * Lundi a mdeb.
     *
     * @var DateTime|null
     */
    private $lundiAMdeb;

    /**
     * Get the lundi a mdeb.
     *
     * @return DateTime|null Returns the lundi a mdeb.
     */
    public function getLundiAMdeb() {
        return $this->lundiAMdeb;
    }

    /**
     * Set the lundi a mdeb.
     *
     * @param DateTime|null $lundiAMdeb The lundi a mdeb.
     */
    public function setLundiAMdeb(DateTime $lundiAMdeb = null) {
        $this->lundiAMdeb = $lundiAMdeb;
        return $this;
    }
}
