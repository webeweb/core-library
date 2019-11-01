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
 * Sauve compresse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSauveCompresseTrait {

    /**
     * Sauve compresse.
     *
     * @var bool
     */
    private $sauveCompresse;

    /**
     * Get the sauve compresse.
     *
     * @return bool Returns the sauve compresse.
     */
    public function getSauveCompresse() {
        return $this->sauveCompresse;
    }

    /**
     * Set the sauve compresse.
     *
     * @param bool $sauveCompresse The sauve compresse.
     */
    public function setSauveCompresse($sauveCompresse) {
        $this->sauveCompresse = $sauveCompresse;
        return $this;
    }
}
