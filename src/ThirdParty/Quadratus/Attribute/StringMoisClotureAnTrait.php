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
 * Mois cloture an trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMoisClotureAnTrait {

    /**
     * Mois cloture an.
     *
     * @var string
     */
    private $moisClotureAn;

    /**
     * Get the mois cloture an.
     *
     * @return string Returns the mois cloture an.
     */
    public function getMoisClotureAn() {
        return $this->moisClotureAn;
    }

    /**
     * Set the mois cloture an.
     *
     * @param string $moisClotureAn The mois cloture an.
     */
    public function setMoisClotureAn($moisClotureAn) {
        $this->moisClotureAn = $moisClotureAn;
        return $this;
    }
}
