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
 * Exclure dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExclureDadsuTrait {

    /**
     * Exclure dadsu.
     *
     * @var bool
     */
    private $exclureDadsu;

    /**
     * Get the exclure dadsu.
     *
     * @return bool Returns the exclure dadsu.
     */
    public function getExclureDadsu() {
        return $this->exclureDadsu;
    }

    /**
     * Set the exclure dadsu.
     *
     * @param bool $exclureDadsu The exclure dadsu.
     */
    public function setExclureDadsu($exclureDadsu) {
        $this->exclureDadsu = $exclureDadsu;
        return $this;
    }
}
