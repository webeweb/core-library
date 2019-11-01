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
 * Rep ass trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepAssTrait {

    /**
     * Rep ass.
     *
     * @var bool
     */
    private $repAss;

    /**
     * Get the rep ass.
     *
     * @return bool Returns the rep ass.
     */
    public function getRepAss() {
        return $this->repAss;
    }

    /**
     * Set the rep ass.
     *
     * @param bool $repAss The rep ass.
     */
    public function setRepAss($repAss) {
        $this->repAss = $repAss;
        return $this;
    }
}
