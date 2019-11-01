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
 * Code expert trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeExpertTrait {

    /**
     * Code expert.
     *
     * @var string
     */
    private $codeExpert;

    /**
     * Get the code expert.
     *
     * @return string Returns the code expert.
     */
    public function getCodeExpert() {
        return $this->codeExpert;
    }

    /**
     * Set the code expert.
     *
     * @param string $codeExpert The code expert.
     */
    public function setCodeExpert($codeExpert) {
        $this->codeExpert = $codeExpert;
        return $this;
    }
}
