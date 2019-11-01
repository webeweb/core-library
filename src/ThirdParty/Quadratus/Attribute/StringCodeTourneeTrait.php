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
 * Code tournee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTourneeTrait {

    /**
     * Code tournee.
     *
     * @var string
     */
    private $codeTournee;

    /**
     * Get the code tournee.
     *
     * @return string Returns the code tournee.
     */
    public function getCodeTournee() {
        return $this->codeTournee;
    }

    /**
     * Set the code tournee.
     *
     * @param string $codeTournee The code tournee.
     */
    public function setCodeTournee($codeTournee) {
        $this->codeTournee = $codeTournee;
        return $this;
    }
}
