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
 * Code dirigeant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDirigeantTrait {

    /**
     * Code dirigeant.
     *
     * @var string
     */
    private $codeDirigeant;

    /**
     * Get the code dirigeant.
     *
     * @return string Returns the code dirigeant.
     */
    public function getCodeDirigeant() {
        return $this->codeDirigeant;
    }

    /**
     * Set the code dirigeant.
     *
     * @param string $codeDirigeant The code dirigeant.
     */
    public function setCodeDirigeant($codeDirigeant) {
        $this->codeDirigeant = $codeDirigeant;
        return $this;
    }
}
