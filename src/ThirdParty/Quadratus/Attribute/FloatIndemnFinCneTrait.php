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
 * Indemn fin cne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnFinCneTrait {

    /**
     * Indemn fin cne.
     *
     * @var float
     */
    private $indemnFinCne;

    /**
     * Get the indemn fin cne.
     *
     * @return float Returns the indemn fin cne.
     */
    public function getIndemnFinCne() {
        return $this->indemnFinCne;
    }

    /**
     * Set the indemn fin cne.
     *
     * @param float $indemnFinCne The indemn fin cne.
     */
    public function setIndemnFinCne($indemnFinCne) {
        $this->indemnFinCne = $indemnFinCne;
        return $this;
    }
}
