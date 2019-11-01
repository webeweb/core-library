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
 * Soumis tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSoumisTvaTrait {

    /**
     * Soumis tva.
     *
     * @var bool
     */
    private $soumisTva;

    /**
     * Get the soumis tva.
     *
     * @return bool Returns the soumis tva.
     */
    public function getSoumisTva() {
        return $this->soumisTva;
    }

    /**
     * Set the soumis tva.
     *
     * @param bool $soumisTva The soumis tva.
     */
    public function setSoumisTva($soumisTva) {
        $this->soumisTva = $soumisTva;
        return $this;
    }
}
