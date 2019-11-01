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
 * Mise en conformite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMiseEnConformiteTrait {

    /**
     * Mise en conformite.
     *
     * @var DateTime|null
     */
    private $miseEnConformite;

    /**
     * Get the mise en conformite.
     *
     * @return DateTime|null Returns the mise en conformite.
     */
    public function getMiseEnConformite() {
        return $this->miseEnConformite;
    }

    /**
     * Set the mise en conformite.
     *
     * @param DateTime|null $miseEnConformite The mise en conformite.
     */
    public function setMiseEnConformite(DateTime $miseEnConformite = null) {
        $this->miseEnConformite = $miseEnConformite;
        return $this;
    }
}
