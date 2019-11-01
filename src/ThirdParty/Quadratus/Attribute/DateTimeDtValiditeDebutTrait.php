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
 * Dt validite debut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtValiditeDebutTrait {

    /**
     * Dt validite debut.
     *
     * @var DateTime|null
     */
    private $dtValiditeDebut;

    /**
     * Get the dt validite debut.
     *
     * @return DateTime|null Returns the dt validite debut.
     */
    public function getDtValiditeDebut() {
        return $this->dtValiditeDebut;
    }

    /**
     * Set the dt validite debut.
     *
     * @param DateTime|null $dtValiditeDebut The dt validite debut.
     */
    public function setDtValiditeDebut(DateTime $dtValiditeDebut = null) {
        $this->dtValiditeDebut = $dtValiditeDebut;
        return $this;
    }
}
