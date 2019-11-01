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
 * Chemin implantation ascii trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCheminImplantationAsciiTrait {

    /**
     * Chemin implantation ascii.
     *
     * @var string
     */
    private $cheminImplantationAscii;

    /**
     * Get the chemin implantation ascii.
     *
     * @return string Returns the chemin implantation ascii.
     */
    public function getCheminImplantationAscii() {
        return $this->cheminImplantationAscii;
    }

    /**
     * Set the chemin implantation ascii.
     *
     * @param string $cheminImplantationAscii The chemin implantation ascii.
     */
    public function setCheminImplantationAscii($cheminImplantationAscii) {
        $this->cheminImplantationAscii = $cheminImplantationAscii;
        return $this;
    }
}
