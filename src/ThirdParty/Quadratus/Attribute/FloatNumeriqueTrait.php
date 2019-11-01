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
 * Numerique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNumeriqueTrait {

    /**
     * Numerique.
     *
     * @var float
     */
    private $numerique;

    /**
     * Get the numerique.
     *
     * @return float Returns the numerique.
     */
    public function getNumerique() {
        return $this->numerique;
    }

    /**
     * Set the numerique.
     *
     * @param float $numerique The numerique.
     */
    public function setNumerique($numerique) {
        $this->numerique = $numerique;
        return $this;
    }
}
