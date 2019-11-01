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
 * Bureau distributeur2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBureauDistributeur2Trait {

    /**
     * Bureau distributeur2.
     *
     * @var string
     */
    private $bureauDistributeur2;

    /**
     * Get the bureau distributeur2.
     *
     * @return string Returns the bureau distributeur2.
     */
    public function getBureauDistributeur2() {
        return $this->bureauDistributeur2;
    }

    /**
     * Set the bureau distributeur2.
     *
     * @param string $bureauDistributeur2 The bureau distributeur2.
     */
    public function setBureauDistributeur2($bureauDistributeur2) {
        $this->bureauDistributeur2 = $bureauDistributeur2;
        return $this;
    }
}
