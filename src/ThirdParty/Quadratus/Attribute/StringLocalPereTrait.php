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
 * Local pere trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLocalPereTrait {

    /**
     * Local pere.
     *
     * @var string
     */
    private $localPere;

    /**
     * Get the local pere.
     *
     * @return string Returns the local pere.
     */
    public function getLocalPere() {
        return $this->localPere;
    }

    /**
     * Set the local pere.
     *
     * @param string $localPere The local pere.
     */
    public function setLocalPere($localPere) {
        $this->localPere = $localPere;
        return $this;
    }
}
