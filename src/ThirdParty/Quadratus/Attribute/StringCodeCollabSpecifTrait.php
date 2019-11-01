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
 * Code collab specif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollabSpecifTrait {

    /**
     * Code collab specif.
     *
     * @var string
     */
    private $codeCollabSpecif;

    /**
     * Get the code collab specif.
     *
     * @return string Returns the code collab specif.
     */
    public function getCodeCollabSpecif() {
        return $this->codeCollabSpecif;
    }

    /**
     * Set the code collab specif.
     *
     * @param string $codeCollabSpecif The code collab specif.
     */
    public function setCodeCollabSpecif($codeCollabSpecif) {
        $this->codeCollabSpecif = $codeCollabSpecif;
        return $this;
    }
}
