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
 * Indemn supp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIndemnSuppTrait {

    /**
     * Indemn supp.
     *
     * @var bool
     */
    private $indemnSupp;

    /**
     * Get the indemn supp.
     *
     * @return bool Returns the indemn supp.
     */
    public function getIndemnSupp() {
        return $this->indemnSupp;
    }

    /**
     * Set the indemn supp.
     *
     * @param bool $indemnSupp The indemn supp.
     */
    public function setIndemnSupp($indemnSupp) {
        $this->indemnSupp = $indemnSupp;
        return $this;
    }
}
