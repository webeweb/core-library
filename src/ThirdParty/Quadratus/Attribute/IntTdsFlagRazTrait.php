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

/**
 * Tds flag raz trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTdsFlagRazTrait {

    /**
     * Tds flag raz.
     *
     * @var int
     */
    private $tdsFlagRaz;

    /**
     * Get the tds flag raz.
     *
     * @return int Returns the tds flag raz.
     */
    public function getTdsFlagRaz() {
        return $this->tdsFlagRaz;
    }

    /**
     * Set the tds flag raz.
     *
     * @param int $tdsFlagRaz The tds flag raz.
     */
    public function setTdsFlagRaz($tdsFlagRaz) {
        $this->tdsFlagRaz = $tdsFlagRaz;
        return $this;
    }
}
