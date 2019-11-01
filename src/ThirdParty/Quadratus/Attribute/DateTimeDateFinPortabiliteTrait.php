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
 * Date fin portabilite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinPortabiliteTrait {

    /**
     * Date fin portabilite.
     *
     * @var DateTime|null
     */
    private $dateFinPortabilite;

    /**
     * Get the date fin portabilite.
     *
     * @return DateTime|null Returns the date fin portabilite.
     */
    public function getDateFinPortabilite() {
        return $this->dateFinPortabilite;
    }

    /**
     * Set the date fin portabilite.
     *
     * @param DateTime|null $dateFinPortabilite The date fin portabilite.
     */
    public function setDateFinPortabilite(DateTime $dateFinPortabilite = null) {
        $this->dateFinPortabilite = $dateFinPortabilite;
        return $this;
    }
}
