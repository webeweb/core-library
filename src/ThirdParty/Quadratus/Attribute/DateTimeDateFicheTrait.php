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
 * Date fiche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFicheTrait {

    /**
     * Date fiche.
     *
     * @var DateTime|null
     */
    private $dateFiche;

    /**
     * Get the date fiche.
     *
     * @return DateTime|null Returns the date fiche.
     */
    public function getDateFiche() {
        return $this->dateFiche;
    }

    /**
     * Set the date fiche.
     *
     * @param DateTime|null $dateFiche The date fiche.
     */
    public function setDateFiche(DateTime $dateFiche = null) {
        $this->dateFiche = $dateFiche;
        return $this;
    }
}
