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
 * Remplacant travaille jf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRemplacantTravailleJfTrait {

    /**
     * Remplacant travaille jf.
     *
     * @var bool
     */
    private $remplacantTravailleJf;

    /**
     * Get the remplacant travaille jf.
     *
     * @return bool Returns the remplacant travaille jf.
     */
    public function getRemplacantTravailleJf() {
        return $this->remplacantTravailleJf;
    }

    /**
     * Set the remplacant travaille jf.
     *
     * @param bool $remplacantTravailleJf The remplacant travaille jf.
     */
    public function setRemplacantTravailleJf($remplacantTravailleJf) {
        $this->remplacantTravailleJf = $remplacantTravailleJf;
        return $this;
    }
}
