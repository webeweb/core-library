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
 * Est multi tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEstMultiTvaTrait {

    /**
     * Est multi tva.
     *
     * @var bool
     */
    private $estMultiTva;

    /**
     * Get the est multi tva.
     *
     * @return bool Returns the est multi tva.
     */
    public function getEstMultiTva() {
        return $this->estMultiTva;
    }

    /**
     * Set the est multi tva.
     *
     * @param bool $estMultiTva The est multi tva.
     */
    public function setEstMultiTva($estMultiTva) {
        $this->estMultiTva = $estMultiTva;
        return $this;
    }
}
