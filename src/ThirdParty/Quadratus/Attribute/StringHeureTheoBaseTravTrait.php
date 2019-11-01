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
 * Heure theo base trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHeureTheoBaseTravTrait {

    /**
     * Heure theo base trav.
     *
     * @var string
     */
    private $heureTheoBaseTrav;

    /**
     * Get the heure theo base trav.
     *
     * @return string Returns the heure theo base trav.
     */
    public function getHeureTheoBaseTrav() {
        return $this->heureTheoBaseTrav;
    }

    /**
     * Set the heure theo base trav.
     *
     * @param string $heureTheoBaseTrav The heure theo base trav.
     */
    public function setHeureTheoBaseTrav($heureTheoBaseTrav) {
        $this->heureTheoBaseTrav = $heureTheoBaseTrav;
        return $this;
    }
}
