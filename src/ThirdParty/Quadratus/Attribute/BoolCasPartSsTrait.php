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
 * Cas part ss trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCasPartSsTrait {

    /**
     * Cas part ss.
     *
     * @var bool
     */
    private $casPartSs;

    /**
     * Get the cas part ss.
     *
     * @return bool Returns the cas part ss.
     */
    public function getCasPartSs() {
        return $this->casPartSs;
    }

    /**
     * Set the cas part ss.
     *
     * @param bool $casPartSs The cas part ss.
     */
    public function setCasPartSs($casPartSs) {
        $this->casPartSs = $casPartSs;
        return $this;
    }
}
