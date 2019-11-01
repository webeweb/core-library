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
 * Code sous famille trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeSousFamilleTrait {

    /**
     * Code sous famille.
     *
     * @var string
     */
    private $codeSousFamille;

    /**
     * Get the code sous famille.
     *
     * @return string Returns the code sous famille.
     */
    public function getCodeSousFamille() {
        return $this->codeSousFamille;
    }

    /**
     * Set the code sous famille.
     *
     * @param string $codeSousFamille The code sous famille.
     */
    public function setCodeSousFamille($codeSousFamille) {
        $this->codeSousFamille = $codeSousFamille;
        return $this;
    }
}
