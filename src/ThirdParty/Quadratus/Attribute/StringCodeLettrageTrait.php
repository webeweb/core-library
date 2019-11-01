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
 * Code lettrage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLettrageTrait {

    /**
     * Code lettrage.
     *
     * @var string
     */
    private $codeLettrage;

    /**
     * Get the code lettrage.
     *
     * @return string Returns the code lettrage.
     */
    public function getCodeLettrage() {
        return $this->codeLettrage;
    }

    /**
     * Set the code lettrage.
     *
     * @param string $codeLettrage The code lettrage.
     */
    public function setCodeLettrage($codeLettrage) {
        $this->codeLettrage = $codeLettrage;
        return $this;
    }
}
