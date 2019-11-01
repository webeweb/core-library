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
 * Code ventil achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeVentilAchatTrait {

    /**
     * Code ventil achat.
     *
     * @var string
     */
    private $codeVentilAchat;

    /**
     * Get the code ventil achat.
     *
     * @return string Returns the code ventil achat.
     */
    public function getCodeVentilAchat() {
        return $this->codeVentilAchat;
    }

    /**
     * Set the code ventil achat.
     *
     * @param string $codeVentilAchat The code ventil achat.
     */
    public function setCodeVentilAchat($codeVentilAchat) {
        $this->codeVentilAchat = $codeVentilAchat;
        return $this;
    }
}
