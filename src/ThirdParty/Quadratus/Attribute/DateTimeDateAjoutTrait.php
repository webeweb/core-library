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
 * Date ajout trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAjoutTrait {

    /**
     * Date ajout.
     *
     * @var DateTime|null
     */
    private $dateAjout;

    /**
     * Get the date ajout.
     *
     * @return DateTime|null Returns the date ajout.
     */
    public function getDateAjout() {
        return $this->dateAjout;
    }

    /**
     * Set the date ajout.
     *
     * @param DateTime|null $dateAjout The date ajout.
     */
    public function setDateAjout(DateTime $dateAjout = null) {
        $this->dateAjout = $dateAjout;
        return $this;
    }
}
