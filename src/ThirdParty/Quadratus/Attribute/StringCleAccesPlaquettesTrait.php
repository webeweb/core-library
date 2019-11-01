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
 * Cle acces plaquettes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAccesPlaquettesTrait {

    /**
     * Cle acces plaquettes.
     *
     * @var string
     */
    private $cleAccesPlaquettes;

    /**
     * Get the cle acces plaquettes.
     *
     * @return string Returns the cle acces plaquettes.
     */
    public function getCleAccesPlaquettes() {
        return $this->cleAccesPlaquettes;
    }

    /**
     * Set the cle acces plaquettes.
     *
     * @param string $cleAccesPlaquettes The cle acces plaquettes.
     */
    public function setCleAccesPlaquettes($cleAccesPlaquettes) {
        $this->cleAccesPlaquettes = $cleAccesPlaquettes;
        return $this;
    }
}
