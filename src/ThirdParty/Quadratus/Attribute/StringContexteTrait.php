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
 * Contexte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContexteTrait {

    /**
     * Contexte.
     *
     * @var string
     */
    private $contexte;

    /**
     * Get the contexte.
     *
     * @return string Returns the contexte.
     */
    public function getContexte() {
        return $this->contexte;
    }

    /**
     * Set the contexte.
     *
     * @param string $contexte The contexte.
     */
    public function setContexte($contexte) {
        $this->contexte = $contexte;
        return $this;
    }
}
