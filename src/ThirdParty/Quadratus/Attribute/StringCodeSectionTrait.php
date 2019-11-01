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
 * Code section trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeSectionTrait {

    /**
     * Code section.
     *
     * @var string
     */
    private $codeSection;

    /**
     * Get the code section.
     *
     * @return string Returns the code section.
     */
    public function getCodeSection() {
        return $this->codeSection;
    }

    /**
     * Set the code section.
     *
     * @param string $codeSection The code section.
     */
    public function setCodeSection($codeSection) {
        $this->codeSection = $codeSection;
        return $this;
    }
}
