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
 * Telex trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelexTrait {

    /**
     * Telex.
     *
     * @var string
     */
    private $telex;

    /**
     * Get the telex.
     *
     * @return string Returns the telex.
     */
    public function getTelex() {
        return $this->telex;
    }

    /**
     * Set the telex.
     *
     * @param string $telex The telex.
     */
    public function setTelex($telex) {
        $this->telex = $telex;
        return $this;
    }
}
