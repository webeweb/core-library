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
 * Lib critere6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritere6Trait {

    /**
     * Lib critere6.
     *
     * @var string
     */
    private $libCritere6;

    /**
     * Get the lib critere6.
     *
     * @return string Returns the lib critere6.
     */
    public function getLibCritere6() {
        return $this->libCritere6;
    }

    /**
     * Set the lib critere6.
     *
     * @param string $libCritere6 The lib critere6.
     */
    public function setLibCritere6($libCritere6) {
        $this->libCritere6 = $libCritere6;
        return $this;
    }
}
