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
 * Euro ou franc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEuroOuFrancTrait {

    /**
     * Euro ou franc.
     *
     * @var string
     */
    private $euroOuFranc;

    /**
     * Get the euro ou franc.
     *
     * @return string Returns the euro ou franc.
     */
    public function getEuroOuFranc() {
        return $this->euroOuFranc;
    }

    /**
     * Set the euro ou franc.
     *
     * @param string $euroOuFranc The euro ou franc.
     */
    public function setEuroOuFranc($euroOuFranc) {
        $this->euroOuFranc = $euroOuFranc;
        return $this;
    }
}
