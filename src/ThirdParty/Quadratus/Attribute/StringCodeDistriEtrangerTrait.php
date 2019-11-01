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
 * Code distri etranger trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDistriEtrangerTrait {

    /**
     * Code distri etranger.
     *
     * @var string
     */
    private $codeDistriEtranger;

    /**
     * Get the code distri etranger.
     *
     * @return string Returns the code distri etranger.
     */
    public function getCodeDistriEtranger() {
        return $this->codeDistriEtranger;
    }

    /**
     * Set the code distri etranger.
     *
     * @param string $codeDistriEtranger The code distri etranger.
     */
    public function setCodeDistriEtranger($codeDistriEtranger) {
        $this->codeDistriEtranger = $codeDistriEtranger;
        return $this;
    }
}
