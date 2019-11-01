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
 * Code anal achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAnalAchatTrait {

    /**
     * Code anal achat.
     *
     * @var string
     */
    private $codeAnalAchat;

    /**
     * Get the code anal achat.
     *
     * @return string Returns the code anal achat.
     */
    public function getCodeAnalAchat() {
        return $this->codeAnalAchat;
    }

    /**
     * Set the code anal achat.
     *
     * @param string $codeAnalAchat The code anal achat.
     */
    public function setCodeAnalAchat($codeAnalAchat) {
        $this->codeAnalAchat = $codeAnalAchat;
        return $this;
    }
}
