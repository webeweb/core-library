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
 * Heure appel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHeureAppelTrait {

    /**
     * Heure appel.
     *
     * @var string
     */
    private $heureAppel;

    /**
     * Get the heure appel.
     *
     * @return string Returns the heure appel.
     */
    public function getHeureAppel() {
        return $this->heureAppel;
    }

    /**
     * Set the heure appel.
     *
     * @param string $heureAppel The heure appel.
     */
    public function setHeureAppel($heureAppel) {
        $this->heureAppel = $heureAppel;
        return $this;
    }
}
