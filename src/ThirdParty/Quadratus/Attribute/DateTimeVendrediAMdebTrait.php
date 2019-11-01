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
 * Vendredi a mdeb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeVendrediAMdebTrait {

    /**
     * Vendredi a mdeb.
     *
     * @var DateTime|null
     */
    private $vendrediAMdeb;

    /**
     * Get the vendredi a mdeb.
     *
     * @return DateTime|null Returns the vendredi a mdeb.
     */
    public function getVendrediAMdeb() {
        return $this->vendrediAMdeb;
    }

    /**
     * Set the vendredi a mdeb.
     *
     * @param DateTime|null $vendrediAMdeb The vendredi a mdeb.
     */
    public function setVendrediAMdeb(DateTime $vendrediAMdeb = null) {
        $this->vendrediAMdeb = $vendrediAMdeb;
        return $this;
    }
}
