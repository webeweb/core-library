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
 * Dadsu num agr ansp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDadsuNumAgrAnspTrait {

    /**
     * Dadsu num agr ansp.
     *
     * @var string
     */
    private $dadsuNumAgrAnsp;

    /**
     * Get the dadsu num agr ansp.
     *
     * @return string Returns the dadsu num agr ansp.
     */
    public function getDadsuNumAgrAnsp() {
        return $this->dadsuNumAgrAnsp;
    }

    /**
     * Set the dadsu num agr ansp.
     *
     * @param string $dadsuNumAgrAnsp The dadsu num agr ansp.
     */
    public function setDadsuNumAgrAnsp($dadsuNumAgrAnsp) {
        $this->dadsuNumAgrAnsp = $dadsuNumAgrAnsp;
        return $this;
    }
}
