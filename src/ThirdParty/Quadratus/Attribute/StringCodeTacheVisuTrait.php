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
 * Code tache visu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTacheVisuTrait {

    /**
     * Code tache visu.
     *
     * @var string
     */
    private $codeTacheVisu;

    /**
     * Get the code tache visu.
     *
     * @return string Returns the code tache visu.
     */
    public function getCodeTacheVisu() {
        return $this->codeTacheVisu;
    }

    /**
     * Set the code tache visu.
     *
     * @param string $codeTacheVisu The code tache visu.
     */
    public function setCodeTacheVisu($codeTacheVisu) {
        $this->codeTacheVisu = $codeTacheVisu;
        return $this;
    }
}
