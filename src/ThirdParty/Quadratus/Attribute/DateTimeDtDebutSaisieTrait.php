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
 * Dt debut saisie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDebutSaisieTrait {

    /**
     * Dt debut saisie.
     *
     * @var DateTime|null
     */
    private $dtDebutSaisie;

    /**
     * Get the dt debut saisie.
     *
     * @return DateTime|null Returns the dt debut saisie.
     */
    public function getDtDebutSaisie() {
        return $this->dtDebutSaisie;
    }

    /**
     * Set the dt debut saisie.
     *
     * @param DateTime|null $dtDebutSaisie The dt debut saisie.
     */
    public function setDtDebutSaisie(DateTime $dtDebutSaisie = null) {
        $this->dtDebutSaisie = $dtDebutSaisie;
        return $this;
    }
}
