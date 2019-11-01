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
 * Indemnite precarite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnitePrecariteTrait {

    /**
     * Indemnite precarite.
     *
     * @var float
     */
    private $indemnitePrecarite;

    /**
     * Get the indemnite precarite.
     *
     * @return float Returns the indemnite precarite.
     */
    public function getIndemnitePrecarite() {
        return $this->indemnitePrecarite;
    }

    /**
     * Set the indemnite precarite.
     *
     * @param float $indemnitePrecarite The indemnite precarite.
     */
    public function setIndemnitePrecarite($indemnitePrecarite) {
        $this->indemnitePrecarite = $indemnitePrecarite;
        return $this;
    }
}
