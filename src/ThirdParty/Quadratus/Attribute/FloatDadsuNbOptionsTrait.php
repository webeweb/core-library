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
 * Dadsu nb options trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDadsuNbOptionsTrait {

    /**
     * Dadsu nb options.
     *
     * @var float
     */
    private $dadsuNbOptions;

    /**
     * Get the dadsu nb options.
     *
     * @return float Returns the dadsu nb options.
     */
    public function getDadsuNbOptions() {
        return $this->dadsuNbOptions;
    }

    /**
     * Set the dadsu nb options.
     *
     * @param float $dadsuNbOptions The dadsu nb options.
     */
    public function setDadsuNbOptions($dadsuNbOptions) {
        $this->dadsuNbOptions = $dadsuNbOptions;
        return $this;
    }
}
