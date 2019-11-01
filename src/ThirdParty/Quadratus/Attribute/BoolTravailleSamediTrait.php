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
 * Travaille samedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTravailleSamediTrait {

    /**
     * Travaille samedi.
     *
     * @var bool
     */
    private $travailleSamedi;

    /**
     * Get the travaille samedi.
     *
     * @return bool Returns the travaille samedi.
     */
    public function getTravailleSamedi() {
        return $this->travailleSamedi;
    }

    /**
     * Set the travaille samedi.
     *
     * @param bool $travailleSamedi The travaille samedi.
     */
    public function setTravailleSamedi($travailleSamedi) {
        $this->travailleSamedi = $travailleSamedi;
        return $this;
    }
}
