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
 * Periode revision trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeRevisionTrait {

    /**
     * Periode revision.
     *
     * @var DateTime|null
     */
    private $periodeRevision;

    /**
     * Get the periode revision.
     *
     * @return DateTime|null Returns the periode revision.
     */
    public function getPeriodeRevision() {
        return $this->periodeRevision;
    }

    /**
     * Set the periode revision.
     *
     * @param DateTime|null $periodeRevision The periode revision.
     */
    public function setPeriodeRevision(DateTime $periodeRevision = null) {
        $this->periodeRevision = $periodeRevision;
        return $this;
    }
}
