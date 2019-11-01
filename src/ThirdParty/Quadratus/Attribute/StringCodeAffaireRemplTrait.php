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
 * Code affaire rempl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAffaireRemplTrait {

    /**
     * Code affaire rempl.
     *
     * @var string
     */
    private $codeAffaireRempl;

    /**
     * Get the code affaire rempl.
     *
     * @return string Returns the code affaire rempl.
     */
    public function getCodeAffaireRempl() {
        return $this->codeAffaireRempl;
    }

    /**
     * Set the code affaire rempl.
     *
     * @param string $codeAffaireRempl The code affaire rempl.
     */
    public function setCodeAffaireRempl($codeAffaireRempl) {
        $this->codeAffaireRempl = $codeAffaireRempl;
        return $this;
    }
}
