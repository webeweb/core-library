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
 * Fin affect trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFinAffectTrait {

    /**
     * Fin affect.
     *
     * @var DateTime|null
     */
    private $finAffect;

    /**
     * Get the fin affect.
     *
     * @return DateTime|null Returns the fin affect.
     */
    public function getFinAffect() {
        return $this->finAffect;
    }

    /**
     * Set the fin affect.
     *
     * @param DateTime|null $finAffect The fin affect.
     */
    public function setFinAffect(DateTime $finAffect = null) {
        $this->finAffect = $finAffect;
        return $this;
    }
}
