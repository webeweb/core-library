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
 * Francs euros trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntFrancsEurosTrait {

    /**
     * Francs euros.
     *
     * @var int
     */
    private $francsEuros;

    /**
     * Get the francs euros.
     *
     * @return int Returns the francs euros.
     */
    public function getFrancsEuros() {
        return $this->francsEuros;
    }

    /**
     * Set the francs euros.
     *
     * @param int $francsEuros The francs euros.
     */
    public function setFrancsEuros($francsEuros) {
        $this->francsEuros = $francsEuros;
        return $this;
    }
}
