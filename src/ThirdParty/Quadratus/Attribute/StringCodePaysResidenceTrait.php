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
 * Code pays residence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePaysResidenceTrait {

    /**
     * Code pays residence.
     *
     * @var string
     */
    private $codePaysResidence;

    /**
     * Get the code pays residence.
     *
     * @return string Returns the code pays residence.
     */
    public function getCodePaysResidence() {
        return $this->codePaysResidence;
    }

    /**
     * Set the code pays residence.
     *
     * @param string $codePaysResidence The code pays residence.
     */
    public function setCodePaysResidence($codePaysResidence) {
        $this->codePaysResidence = $codePaysResidence;
        return $this;
    }
}
