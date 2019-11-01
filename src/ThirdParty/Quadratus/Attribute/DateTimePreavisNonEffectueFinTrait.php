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
 * Preavis non effectue fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePreavisNonEffectueFinTrait {

    /**
     * Preavis non effectue fin.
     *
     * @var DateTime|null
     */
    private $preavisNonEffectueFin;

    /**
     * Get the preavis non effectue fin.
     *
     * @return DateTime|null Returns the preavis non effectue fin.
     */
    public function getPreavisNonEffectueFin() {
        return $this->preavisNonEffectueFin;
    }

    /**
     * Set the preavis non effectue fin.
     *
     * @param DateTime|null $preavisNonEffectueFin The preavis non effectue fin.
     */
    public function setPreavisNonEffectueFin(DateTime $preavisNonEffectueFin = null) {
        $this->preavisNonEffectueFin = $preavisNonEffectueFin;
        return $this;
    }
}
