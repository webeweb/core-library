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

/**
 * Date anniversaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDateAnniversaireTrait {

    /**
     * Date anniversaire.
     *
     * @var string
     */
    private $dateAnniversaire;

    /**
     * Get the date anniversaire.
     *
     * @return string Returns the date anniversaire.
     */
    public function getDateAnniversaire() {
        return $this->dateAnniversaire;
    }

    /**
     * Set the date anniversaire.
     *
     * @param string $dateAnniversaire The date anniversaire.
     */
    public function setDateAnniversaire($dateAnniversaire) {
        $this->dateAnniversaire = $dateAnniversaire;
        return $this;
    }
}
