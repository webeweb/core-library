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
 * Code organisme agirc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOrganismeAgircTrait {

    /**
     * Code organisme agirc.
     *
     * @var string
     */
    private $codeOrganismeAgirc;

    /**
     * Get the code organisme agirc.
     *
     * @return string Returns the code organisme agirc.
     */
    public function getCodeOrganismeAgirc() {
        return $this->codeOrganismeAgirc;
    }

    /**
     * Set the code organisme agirc.
     *
     * @param string $codeOrganismeAgirc The code organisme agirc.
     */
    public function setCodeOrganismeAgirc($codeOrganismeAgirc) {
        $this->codeOrganismeAgirc = $codeOrganismeAgirc;
        return $this;
    }
}
