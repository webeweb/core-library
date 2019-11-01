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
 * Code sous tournee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeSousTourneeTrait {

    /**
     * Code sous tournee.
     *
     * @var string
     */
    private $codeSousTournee;

    /**
     * Get the code sous tournee.
     *
     * @return string Returns the code sous tournee.
     */
    public function getCodeSousTournee() {
        return $this->codeSousTournee;
    }

    /**
     * Set the code sous tournee.
     *
     * @param string $codeSousTournee The code sous tournee.
     */
    public function setCodeSousTournee($codeSousTournee) {
        $this->codeSousTournee = $codeSousTournee;
        return $this;
    }
}
