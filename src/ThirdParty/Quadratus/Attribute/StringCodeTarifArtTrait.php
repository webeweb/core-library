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
 * Code tarif art trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTarifArtTrait {

    /**
     * Code tarif art.
     *
     * @var string
     */
    private $codeTarifArt;

    /**
     * Get the code tarif art.
     *
     * @return string Returns the code tarif art.
     */
    public function getCodeTarifArt() {
        return $this->codeTarifArt;
    }

    /**
     * Set the code tarif art.
     *
     * @param string $codeTarifArt The code tarif art.
     */
    public function setCodeTarifArt($codeTarifArt) {
        $this->codeTarifArt = $codeTarifArt;
        return $this;
    }
}
