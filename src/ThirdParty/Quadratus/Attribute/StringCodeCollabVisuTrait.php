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
 * Code collab visu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollabVisuTrait {

    /**
     * Code collab visu.
     *
     * @var string
     */
    private $codeCollabVisu;

    /**
     * Get the code collab visu.
     *
     * @return string Returns the code collab visu.
     */
    public function getCodeCollabVisu() {
        return $this->codeCollabVisu;
    }

    /**
     * Set the code collab visu.
     *
     * @param string $codeCollabVisu The code collab visu.
     */
    public function setCodeCollabVisu($codeCollabVisu) {
        $this->codeCollabVisu = $codeCollabVisu;
        return $this;
    }
}
