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
 * Rep subv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepSubvTrait {

    /**
     * Rep subv.
     *
     * @var bool
     */
    private $repSubv;

    /**
     * Get the rep subv.
     *
     * @return bool Returns the rep subv.
     */
    public function getRepSubv() {
        return $this->repSubv;
    }

    /**
     * Set the rep subv.
     *
     * @param bool $repSubv The rep subv.
     */
    public function setRepSubv($repSubv) {
        $this->repSubv = $repSubv;
        return $this;
    }
}
