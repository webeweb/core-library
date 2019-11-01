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
 * Code article cotisation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeArticleCotisationTrait {

    /**
     * Code article cotisation.
     *
     * @var string
     */
    private $codeArticleCotisation;

    /**
     * Get the code article cotisation.
     *
     * @return string Returns the code article cotisation.
     */
    public function getCodeArticleCotisation() {
        return $this->codeArticleCotisation;
    }

    /**
     * Set the code article cotisation.
     *
     * @param string $codeArticleCotisation The code article cotisation.
     */
    public function setCodeArticleCotisation($codeArticleCotisation) {
        $this->codeArticleCotisation = $codeArticleCotisation;
        return $this;
    }
}
