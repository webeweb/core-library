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
 * Proprietes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProprietesTrait {

    /**
     * Proprietes.
     *
     * @var string
     */
    private $proprietes;

    /**
     * Get the proprietes.
     *
     * @return string Returns the proprietes.
     */
    public function getProprietes() {
        return $this->proprietes;
    }

    /**
     * Set the proprietes.
     *
     * @param string $proprietes The proprietes.
     */
    public function setProprietes($proprietes) {
        $this->proprietes = $proprietes;
        return $this;
    }
}
