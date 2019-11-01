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
 * Code section prud trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeSectionPrudTrait {

    /**
     * Code section prud.
     *
     * @var string
     */
    private $codeSectionPrud;

    /**
     * Get the code section prud.
     *
     * @return string Returns the code section prud.
     */
    public function getCodeSectionPrud() {
        return $this->codeSectionPrud;
    }

    /**
     * Set the code section prud.
     *
     * @param string $codeSectionPrud The code section prud.
     */
    public function setCodeSectionPrud($codeSectionPrud) {
        $this->codeSectionPrud = $codeSectionPrud;
        return $this;
    }
}
