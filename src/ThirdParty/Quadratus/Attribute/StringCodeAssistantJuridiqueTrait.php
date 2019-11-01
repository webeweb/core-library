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
 * Code assistant juridique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAssistantJuridiqueTrait {

    /**
     * Code assistant juridique.
     *
     * @var string
     */
    private $codeAssistantJuridique;

    /**
     * Get the code assistant juridique.
     *
     * @return string Returns the code assistant juridique.
     */
    public function getCodeAssistantJuridique() {
        return $this->codeAssistantJuridique;
    }

    /**
     * Set the code assistant juridique.
     *
     * @param string $codeAssistantJuridique The code assistant juridique.
     */
    public function setCodeAssistantJuridique($codeAssistantJuridique) {
        $this->codeAssistantJuridique = $codeAssistantJuridique;
        return $this;
    }
}
