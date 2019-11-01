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
 * Origine fichier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOrigineFichierTrait {

    /**
     * Origine fichier.
     *
     * @var string
     */
    private $origineFichier;

    /**
     * Get the origine fichier.
     *
     * @return string Returns the origine fichier.
     */
    public function getOrigineFichier() {
        return $this->origineFichier;
    }

    /**
     * Set the origine fichier.
     *
     * @param string $origineFichier The origine fichier.
     */
    public function setOrigineFichier($origineFichier) {
        $this->origineFichier = $origineFichier;
        return $this;
    }
}
