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
 * Frais pro soumis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatFraisProSoumisTrait {

    /**
     * Frais pro soumis.
     *
     * @var float
     */
    private $fraisProSoumis;

    /**
     * Get the frais pro soumis.
     *
     * @return float Returns the frais pro soumis.
     */
    public function getFraisProSoumis() {
        return $this->fraisProSoumis;
    }

    /**
     * Set the frais pro soumis.
     *
     * @param float $fraisProSoumis The frais pro soumis.
     */
    public function setFraisProSoumis($fraisProSoumis) {
        $this->fraisProSoumis = $fraisProSoumis;
        return $this;
    }
}
