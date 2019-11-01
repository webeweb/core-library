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
 * Code section prud prec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeSectionPrudPrecTrait {

    /**
     * Code section prud prec.
     *
     * @var string
     */
    private $codeSectionPrudPrec;

    /**
     * Get the code section prud prec.
     *
     * @return string Returns the code section prud prec.
     */
    public function getCodeSectionPrudPrec() {
        return $this->codeSectionPrudPrec;
    }

    /**
     * Set the code section prud prec.
     *
     * @param string $codeSectionPrudPrec The code section prud prec.
     */
    public function setCodeSectionPrudPrec($codeSectionPrudPrec) {
        $this->codeSectionPrudPrec = $codeSectionPrudPrec;
        return $this;
    }
}
