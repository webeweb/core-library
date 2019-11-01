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
 * Code ss famille trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeSsFamilleTrait {

    /**
     * Code ss famille.
     *
     * @var string
     */
    private $codeSsFamille;

    /**
     * Get the code ss famille.
     *
     * @return string Returns the code ss famille.
     */
    public function getCodeSsFamille() {
        return $this->codeSsFamille;
    }

    /**
     * Set the code ss famille.
     *
     * @param string $codeSsFamille The code ss famille.
     */
    public function setCodeSsFamille($codeSsFamille) {
        $this->codeSsFamille = $codeSsFamille;
        return $this;
    }
}
