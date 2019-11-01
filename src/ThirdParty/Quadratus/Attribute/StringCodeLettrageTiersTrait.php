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
 * Code lettrage tiers trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLettrageTiersTrait {

    /**
     * Code lettrage tiers.
     *
     * @var string
     */
    private $codeLettrageTiers;

    /**
     * Get the code lettrage tiers.
     *
     * @return string Returns the code lettrage tiers.
     */
    public function getCodeLettrageTiers() {
        return $this->codeLettrageTiers;
    }

    /**
     * Set the code lettrage tiers.
     *
     * @param string $codeLettrageTiers The code lettrage tiers.
     */
    public function setCodeLettrageTiers($codeLettrageTiers) {
        $this->codeLettrageTiers = $codeLettrageTiers;
        return $this;
    }
}
