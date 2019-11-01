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
 * Tentatives trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTentativesTrait {

    /**
     * Tentatives.
     *
     * @var string
     */
    private $tentatives;

    /**
     * Get the tentatives.
     *
     * @return string Returns the tentatives.
     */
    public function getTentatives() {
        return $this->tentatives;
    }

    /**
     * Set the tentatives.
     *
     * @param string $tentatives The tentatives.
     */
    public function setTentatives($tentatives) {
        $this->tentatives = $tentatives;
        return $this;
    }
}
