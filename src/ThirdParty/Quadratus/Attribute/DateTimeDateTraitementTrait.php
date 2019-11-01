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
 * Date traitement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateTraitementTrait {

    /**
     * Date traitement.
     *
     * @var DateTime|null
     */
    private $dateTraitement;

    /**
     * Get the date traitement.
     *
     * @return DateTime|null Returns the date traitement.
     */
    public function getDateTraitement() {
        return $this->dateTraitement;
    }

    /**
     * Set the date traitement.
     *
     * @param DateTime|null $dateTraitement The date traitement.
     */
    public function setDateTraitement(DateTime $dateTraitement = null) {
        $this->dateTraitement = $dateTraitement;
        return $this;
    }
}
