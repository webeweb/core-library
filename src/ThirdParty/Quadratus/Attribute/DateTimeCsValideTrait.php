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
 * Cs valide trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeCsValideTrait {

    /**
     * Cs valide.
     *
     * @var DateTime|null
     */
    private $csValide;

    /**
     * Get the cs valide.
     *
     * @return DateTime|null Returns the cs valide.
     */
    public function getCsValide() {
        return $this->csValide;
    }

    /**
     * Set the cs valide.
     *
     * @param DateTime|null $csValide The cs valide.
     */
    public function setCsValide(DateTime $csValide = null) {
        $this->csValide = $csValide;
        return $this;
    }
}
