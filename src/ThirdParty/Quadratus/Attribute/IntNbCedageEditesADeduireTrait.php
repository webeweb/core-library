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
 * Nb cedage edites a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbCedageEditesADeduireTrait {

    /**
     * Nb cedage edites a deduire.
     *
     * @var int
     */
    private $nbCedageEditesADeduire;

    /**
     * Get the nb cedage edites a deduire.
     *
     * @return int Returns the nb cedage edites a deduire.
     */
    public function getNbCedageEditesADeduire() {
        return $this->nbCedageEditesADeduire;
    }

    /**
     * Set the nb cedage edites a deduire.
     *
     * @param int $nbCedageEditesADeduire The nb cedage edites a deduire.
     */
    public function setNbCedageEditesADeduire($nbCedageEditesADeduire) {
        $this->nbCedageEditesADeduire = $nbCedageEditesADeduire;
        return $this;
    }
}
