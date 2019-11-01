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
 * Periode archivage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeArchivageTrait {

    /**
     * Periode archivage.
     *
     * @var DateTime|null
     */
    private $periodeArchivage;

    /**
     * Get the periode archivage.
     *
     * @return DateTime|null Returns the periode archivage.
     */
    public function getPeriodeArchivage() {
        return $this->periodeArchivage;
    }

    /**
     * Set the periode archivage.
     *
     * @param DateTime|null $periodeArchivage The periode archivage.
     */
    public function setPeriodeArchivage(DateTime $periodeArchivage = null) {
        $this->periodeArchivage = $periodeArchivage;
        return $this;
    }
}
