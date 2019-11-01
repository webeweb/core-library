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

use DateTime;

/**
 * Preavis effectue fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePreavisEffectueFinTrait {

    /**
     * Preavis effectue fin.
     *
     * @var DateTime|null
     */
    private $preavisEffectueFin;

    /**
     * Get the preavis effectue fin.
     *
     * @return DateTime|null Returns the preavis effectue fin.
     */
    public function getPreavisEffectueFin() {
        return $this->preavisEffectueFin;
    }

    /**
     * Set the preavis effectue fin.
     *
     * @param DateTime|null $preavisEffectueFin The preavis effectue fin.
     */
    public function setPreavisEffectueFin(DateTime $preavisEffectueFin = null) {
        $this->preavisEffectueFin = $preavisEffectueFin;
        return $this;
    }
}
