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
 * Code devise achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDeviseAchatTrait {

    /**
     * Code devise achat.
     *
     * @var string
     */
    private $codeDeviseAchat;

    /**
     * Get the code devise achat.
     *
     * @return string Returns the code devise achat.
     */
    public function getCodeDeviseAchat() {
        return $this->codeDeviseAchat;
    }

    /**
     * Set the code devise achat.
     *
     * @param string $codeDeviseAchat The code devise achat.
     */
    public function setCodeDeviseAchat($codeDeviseAchat) {
        $this->codeDeviseAchat = $codeDeviseAchat;
        return $this;
    }
}
