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
 * Code cotis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCotisTrait {

    /**
     * Code cotis.
     *
     * @var string
     */
    private $codeCotis;

    /**
     * Get the code cotis.
     *
     * @return string Returns the code cotis.
     */
    public function getCodeCotis() {
        return $this->codeCotis;
    }

    /**
     * Set the code cotis.
     *
     * @param string $codeCotis The code cotis.
     */
    public function setCodeCotis($codeCotis) {
        $this->codeCotis = $codeCotis;
        return $this;
    }
}
