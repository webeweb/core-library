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
 * Num mandat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumMandatTrait {

    /**
     * Num mandat.
     *
     * @var int
     */
    private $numMandat;

    /**
     * Get the num mandat.
     *
     * @return int Returns the num mandat.
     */
    public function getNumMandat() {
        return $this->numMandat;
    }

    /**
     * Set the num mandat.
     *
     * @param int $numMandat The num mandat.
     */
    public function setNumMandat($numMandat) {
        $this->numMandat = $numMandat;
        return $this;
    }
}
