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
 * Code college prud prec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollegePrudPrecTrait {

    /**
     * Code college prud prec.
     *
     * @var string
     */
    private $codeCollegePrudPrec;

    /**
     * Get the code college prud prec.
     *
     * @return string Returns the code college prud prec.
     */
    public function getCodeCollegePrudPrec() {
        return $this->codeCollegePrudPrec;
    }

    /**
     * Set the code college prud prec.
     *
     * @param string $codeCollegePrudPrec The code college prud prec.
     */
    public function setCodeCollegePrudPrec($codeCollegePrudPrec) {
        $this->codeCollegePrudPrec = $codeCollegePrudPrec;
        return $this;
    }
}
