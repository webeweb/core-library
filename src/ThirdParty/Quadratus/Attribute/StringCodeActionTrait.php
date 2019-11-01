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
 * Code action trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeActionTrait {

    /**
     * Code action.
     *
     * @var string
     */
    private $codeAction;

    /**
     * Get the code action.
     *
     * @return string Returns the code action.
     */
    public function getCodeAction() {
        return $this->codeAction;
    }

    /**
     * Set the code action.
     *
     * @param string $codeAction The code action.
     */
    public function setCodeAction($codeAction) {
        $this->codeAction = $codeAction;
        return $this;
    }
}
