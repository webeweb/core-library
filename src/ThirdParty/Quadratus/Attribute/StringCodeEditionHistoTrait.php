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
 * Code edition histo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeEditionHistoTrait {

    /**
     * Code edition histo.
     *
     * @var string
     */
    private $codeEditionHisto;

    /**
     * Get the code edition histo.
     *
     * @return string Returns the code edition histo.
     */
    public function getCodeEditionHisto() {
        return $this->codeEditionHisto;
    }

    /**
     * Set the code edition histo.
     *
     * @param string $codeEditionHisto The code edition histo.
     */
    public function setCodeEditionHisto($codeEditionHisto) {
        $this->codeEditionHisto = $codeEditionHisto;
        return $this;
    }
}
