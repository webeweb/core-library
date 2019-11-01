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
 * Heure debut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHeureDebutTrait {

    /**
     * Heure debut.
     *
     * @var string
     */
    private $heureDebut;

    /**
     * Get the heure debut.
     *
     * @return string Returns the heure debut.
     */
    public function getHeureDebut() {
        return $this->heureDebut;
    }

    /**
     * Set the heure debut.
     *
     * @param string $heureDebut The heure debut.
     */
    public function setHeureDebut($heureDebut) {
        $this->heureDebut = $heureDebut;
        return $this;
    }
}
