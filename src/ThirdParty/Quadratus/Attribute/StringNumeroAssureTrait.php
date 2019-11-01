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
 * Numero assure trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroAssureTrait {

    /**
     * Numero assure.
     *
     * @var string
     */
    private $numeroAssure;

    /**
     * Get the numero assure.
     *
     * @return string Returns the numero assure.
     */
    public function getNumeroAssure() {
        return $this->numeroAssure;
    }

    /**
     * Set the numero assure.
     *
     * @param string $numeroAssure The numero assure.
     */
    public function setNumeroAssure($numeroAssure) {
        $this->numeroAssure = $numeroAssure;
        return $this;
    }
}
