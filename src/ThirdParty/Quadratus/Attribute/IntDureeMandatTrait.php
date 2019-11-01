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
 * Duree mandat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDureeMandatTrait {

    /**
     * Duree mandat.
     *
     * @var int
     */
    private $dureeMandat;

    /**
     * Get the duree mandat.
     *
     * @return int Returns the duree mandat.
     */
    public function getDureeMandat() {
        return $this->dureeMandat;
    }

    /**
     * Set the duree mandat.
     *
     * @param int $dureeMandat The duree mandat.
     */
    public function setDureeMandat($dureeMandat) {
        $this->dureeMandat = $dureeMandat;
        return $this;
    }
}
