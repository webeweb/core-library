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
 * Etbl cacm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblCacmTrait {

    /**
     * Etbl cacm.
     *
     * @var string
     */
    private $etblCacm;

    /**
     * Get the etbl cacm.
     *
     * @return string Returns the etbl cacm.
     */
    public function getEtblCacm() {
        return $this->etblCacm;
    }

    /**
     * Set the etbl cacm.
     *
     * @param string $etblCacm The etbl cacm.
     */
    public function setEtblCacm($etblCacm) {
        $this->etblCacm = $etblCacm;
        return $this;
    }
}
