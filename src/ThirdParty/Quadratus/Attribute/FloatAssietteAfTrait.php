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
 * Assiette af trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAssietteAfTrait {

    /**
     * Assiette af.
     *
     * @var float
     */
    private $assietteAf;

    /**
     * Get the assiette af.
     *
     * @return float Returns the assiette af.
     */
    public function getAssietteAf() {
        return $this->assietteAf;
    }

    /**
     * Set the assiette af.
     *
     * @param float $assietteAf The assiette af.
     */
    public function setAssietteAf($assietteAf) {
        $this->assietteAf = $assietteAf;
        return $this;
    }
}
