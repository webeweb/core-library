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
 * Seuil declenche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSeuilDeclencheTrait {

    /**
     * Seuil declenche.
     *
     * @var float
     */
    private $seuilDeclenche;

    /**
     * Get the seuil declenche.
     *
     * @return float Returns the seuil declenche.
     */
    public function getSeuilDeclenche() {
        return $this->seuilDeclenche;
    }

    /**
     * Set the seuil declenche.
     *
     * @param float $seuilDeclenche The seuil declenche.
     */
    public function setSeuilDeclenche($seuilDeclenche) {
        $this->seuilDeclenche = $seuilDeclenche;
        return $this;
    }
}
