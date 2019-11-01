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
 * Code prospect trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeProspectTrait {

    /**
     * Code prospect.
     *
     * @var string
     */
    private $codeProspect;

    /**
     * Get the code prospect.
     *
     * @return string Returns the code prospect.
     */
    public function getCodeProspect() {
        return $this->codeProspect;
    }

    /**
     * Set the code prospect.
     *
     * @param string $codeProspect The code prospect.
     */
    public function setCodeProspect($codeProspect) {
        $this->codeProspect = $codeProspect;
        return $this;
    }
}
