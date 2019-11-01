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
 * Date rappro bancaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateRapproBancaireTrait {

    /**
     * Date rappro bancaire.
     *
     * @var DateTime|null
     */
    private $dateRapproBancaire;

    /**
     * Get the date rappro bancaire.
     *
     * @return DateTime|null Returns the date rappro bancaire.
     */
    public function getDateRapproBancaire() {
        return $this->dateRapproBancaire;
    }

    /**
     * Set the date rappro bancaire.
     *
     * @param DateTime|null $dateRapproBancaire The date rappro bancaire.
     */
    public function setDateRapproBancaire(DateTime $dateRapproBancaire = null) {
        $this->dateRapproBancaire = $dateRapproBancaire;
        return $this;
    }
}
