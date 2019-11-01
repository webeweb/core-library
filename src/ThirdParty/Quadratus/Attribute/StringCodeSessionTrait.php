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
 * Code session trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeSessionTrait {

    /**
     * Code session.
     *
     * @var string
     */
    private $codeSession;

    /**
     * Get the code session.
     *
     * @return string Returns the code session.
     */
    public function getCodeSession() {
        return $this->codeSession;
    }

    /**
     * Set the code session.
     *
     * @param string $codeSession The code session.
     */
    public function setCodeSession($codeSession) {
        $this->codeSession = $codeSession;
        return $this;
    }
}
