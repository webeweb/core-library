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
 * Delai trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDelaiTrait {

    /**
     * Delai.
     *
     * @var float
     */
    private $delai;

    /**
     * Get the delai.
     *
     * @return float Returns the delai.
     */
    public function getDelai() {
        return $this->delai;
    }

    /**
     * Set the delai.
     *
     * @param float $delai The delai.
     */
    public function setDelai($delai) {
        $this->delai = $delai;
        return $this;
    }
}
