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
 * Dimanche p mdeb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDimanchePMdebTrait {

    /**
     * Dimanche p mdeb.
     *
     * @var DateTime|null
     */
    private $dimanchePMdeb;

    /**
     * Get the dimanche p mdeb.
     *
     * @return DateTime|null Returns the dimanche p mdeb.
     */
    public function getDimanchePMdeb() {
        return $this->dimanchePMdeb;
    }

    /**
     * Set the dimanche p mdeb.
     *
     * @param DateTime|null $dimanchePMdeb The dimanche p mdeb.
     */
    public function setDimanchePMdeb(DateTime $dimanchePMdeb = null) {
        $this->dimanchePMdeb = $dimanchePMdeb;
        return $this;
    }
}
