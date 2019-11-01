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
 * Ct valide trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeCtValideTrait {

    /**
     * Ct valide.
     *
     * @var DateTime|null
     */
    private $ctValide;

    /**
     * Get the ct valide.
     *
     * @return DateTime|null Returns the ct valide.
     */
    public function getCtValide() {
        return $this->ctValide;
    }

    /**
     * Set the ct valide.
     *
     * @param DateTime|null $ctValide The ct valide.
     */
    public function setCtValide(DateTime $ctValide = null) {
        $this->ctValide = $ctValide;
        return $this;
    }
}
