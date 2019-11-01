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
 * Info fichier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringInfoFichierTrait {

    /**
     * Info fichier.
     *
     * @var string
     */
    private $infoFichier;

    /**
     * Get the info fichier.
     *
     * @return string Returns the info fichier.
     */
    public function getInfoFichier() {
        return $this->infoFichier;
    }

    /**
     * Set the info fichier.
     *
     * @param string $infoFichier The info fichier.
     */
    public function setInfoFichier($infoFichier) {
        $this->infoFichier = $infoFichier;
        return $this;
    }
}
