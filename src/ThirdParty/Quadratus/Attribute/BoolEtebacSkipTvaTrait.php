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
 * Etebac skip tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEtebacSkipTvaTrait {

    /**
     * Etebac skip tva.
     *
     * @var bool
     */
    private $etebacSkipTva;

    /**
     * Get the etebac skip tva.
     *
     * @return bool Returns the etebac skip tva.
     */
    public function getEtebacSkipTva() {
        return $this->etebacSkipTva;
    }

    /**
     * Set the etebac skip tva.
     *
     * @param bool $etebacSkipTva The etebac skip tva.
     */
    public function setEtebacSkipTva($etebacSkipTva) {
        $this->etebacSkipTva = $etebacSkipTva;
        return $this;
    }
}
