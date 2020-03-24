<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\OcrLad\Model\Attribute;

use WBW\Library\Core\ThirdParty\OcrLad\Model\Word;

/**
 * Array words trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\ThirdParty\OcrLad\Model\Attribute
 */
trait ArrayWordsTrait {

    /**
     * Words.
     *
     * @var Word[]
     */
    private $words;

    /**
     * Add a word.
     *
     * @param Word $word The word.
     */
    public function addWord(Word $word) {
        $this->words[] = $word;
        return $this;
    }

    /**
     * Get the words.
     *
     * @return Word[] Returns the words.
     */
    public function getWords() {
        return $this->words;
    }

    /**
     * Set the words.
     *
     * @param Word[] $words The words.
     */
    protected function setWords(array $words) {
        $this->words = $words;
        return $this;
    }
}