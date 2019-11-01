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
 * Emplacement fichier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmplacementFichierTrait {

    /**
     * Emplacement fichier.
     *
     * @var string
     */
    private $emplacementFichier;

    /**
     * Get the emplacement fichier.
     *
     * @return string Returns the emplacement fichier.
     */
    public function getEmplacementFichier() {
        return $this->emplacementFichier;
    }

    /**
     * Set the emplacement fichier.
     *
     * @param string $emplacementFichier The emplacement fichier.
     */
    public function setEmplacementFichier($emplacementFichier) {
        $this->emplacementFichier = $emplacementFichier;
        return $this;
    }
}
