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
 * Modele proformas trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleProformasTrait {

    /**
     * Modele proformas.
     *
     * @var string
     */
    private $modeleProformas;

    /**
     * Get the modele proformas.
     *
     * @return string Returns the modele proformas.
     */
    public function getModeleProformas() {
        return $this->modeleProformas;
    }

    /**
     * Set the modele proformas.
     *
     * @param string $modeleProformas The modele proformas.
     */
    public function setModeleProformas($modeleProformas) {
        $this->modeleProformas = $modeleProformas;
        return $this;
    }
}
