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
 * Lib ecriture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibEcritureTrait {

    /**
     * Lib ecriture.
     *
     * @var string
     */
    private $libEcriture;

    /**
     * Get the lib ecriture.
     *
     * @return string Returns the lib ecriture.
     */
    public function getLibEcriture() {
        return $this->libEcriture;
    }

    /**
     * Set the lib ecriture.
     *
     * @param string $libEcriture The lib ecriture.
     */
    public function setLibEcriture($libEcriture) {
        $this->libEcriture = $libEcriture;
        return $this;
    }
}
