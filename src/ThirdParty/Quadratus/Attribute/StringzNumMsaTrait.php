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
 * z num msa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringzNumMsaTrait {

    /**
     * z num msa.
     *
     * @var string
     */
    private $zNumMsa;

    /**
     * Get the z num msa.
     *
     * @return string Returns the z num msa.
     */
    public function getzNumMsa() {
        return $this->zNumMsa;
    }

    /**
     * Set the z num msa.
     *
     * @param string $zNumMsa The z num msa.
     */
    public function setzNumMsa($zNumMsa) {
        $this->zNumMsa = $zNumMsa;
        return $this;
    }
}
