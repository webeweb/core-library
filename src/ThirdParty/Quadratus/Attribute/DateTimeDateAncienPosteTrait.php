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
 * Date ancien poste trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAncienPosteTrait {

    /**
     * Date ancien poste.
     *
     * @var DateTime|null
     */
    private $dateAncienPoste;

    /**
     * Get the date ancien poste.
     *
     * @return DateTime|null Returns the date ancien poste.
     */
    public function getDateAncienPoste() {
        return $this->dateAncienPoste;
    }

    /**
     * Set the date ancien poste.
     *
     * @param DateTime|null $dateAncienPoste The date ancien poste.
     */
    public function setDateAncienPoste(DateTime $dateAncienPoste = null) {
        $this->dateAncienPoste = $dateAncienPoste;
        return $this;
    }
}
