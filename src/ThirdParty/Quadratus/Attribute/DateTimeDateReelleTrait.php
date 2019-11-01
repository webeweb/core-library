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
 * Date reelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateReelleTrait {

    /**
     * Date reelle.
     *
     * @var DateTime|null
     */
    private $dateReelle;

    /**
     * Get the date reelle.
     *
     * @return DateTime|null Returns the date reelle.
     */
    public function getDateReelle() {
        return $this->dateReelle;
    }

    /**
     * Set the date reelle.
     *
     * @param DateTime|null $dateReelle The date reelle.
     */
    public function setDateReelle(DateTime $dateReelle = null) {
        $this->dateReelle = $dateReelle;
        return $this;
    }
}
