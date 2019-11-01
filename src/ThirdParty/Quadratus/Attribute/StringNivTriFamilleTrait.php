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
 * Niv tri famille trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNivTriFamilleTrait {

    /**
     * Niv tri famille.
     *
     * @var string
     */
    private $nivTriFamille;

    /**
     * Get the niv tri famille.
     *
     * @return string Returns the niv tri famille.
     */
    public function getNivTriFamille() {
        return $this->nivTriFamille;
    }

    /**
     * Set the niv tri famille.
     *
     * @param string $nivTriFamille The niv tri famille.
     */
    public function setNivTriFamille($nivTriFamille) {
        $this->nivTriFamille = $nivTriFamille;
        return $this;
    }
}
