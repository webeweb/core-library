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
 * Save histo memo2 file trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaveHistoMemo2FileTrait {

    /**
     * Save histo memo2 file.
     *
     * @var bool
     */
    private $saveHistoMemo2File;

    /**
     * Get the save histo memo2 file.
     *
     * @return bool Returns the save histo memo2 file.
     */
    public function getSaveHistoMemo2File() {
        return $this->saveHistoMemo2File;
    }

    /**
     * Set the save histo memo2 file.
     *
     * @param bool $saveHistoMemo2File The save histo memo2 file.
     */
    public function setSaveHistoMemo2File($saveHistoMemo2File) {
        $this->saveHistoMemo2File = $saveHistoMemo2File;
        return $this;
    }
}
