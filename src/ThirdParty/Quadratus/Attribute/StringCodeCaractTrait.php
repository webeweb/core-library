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
 * Code caract trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCaractTrait {

    /**
     * Code caract.
     *
     * @var string
     */
    private $codeCaract;

    /**
     * Get the code caract.
     *
     * @return string Returns the code caract.
     */
    public function getCodeCaract() {
        return $this->codeCaract;
    }

    /**
     * Set the code caract.
     *
     * @param string $codeCaract The code caract.
     */
    public function setCodeCaract($codeCaract) {
        $this->codeCaract = $codeCaract;
        return $this;
    }
}
