<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Widget\Tests\Renderer\Component;

use WBW\Library\Common\Sorter\AlphabeticalNodeInterface;
use WBW\Library\Widget\Component\Select\ChoiceLabelInterface;
use WBW\Library\Widget\Renderer\Component\SelectRenderer;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Select renderer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Renderer\Component
 */
class SelectRendererTest extends AbstractTestCase {

    /**
     * Test renderOption()
     *
     * @return void
     */
    public function testRenderOption(): void {

        // Set an Alphabetical node mock.
        $alphabeticalNode = $this->getMockBuilder(AlphabeticalNodeInterface::class)->getMock();
        $alphabeticalNode->expects($this->any())->method("getAlphabeticalTreeNodeParent")->willReturn(null);

        // Set a Choice label mock.
        $choiceLabel = $this->getMockBuilder(ChoiceLabelInterface::class)->getMock();
        $choiceLabel->expects($this->any())->method("getChoiceLabel")->willReturn("choiceLabel");

        $this->assertEquals("Empty selection", SelectRenderer::renderOption(null));
        $this->assertEquals("choiceLabel", SelectRenderer::renderOption($choiceLabel));
        $this->assertEquals("This option must implements " . ChoiceLabelInterface::class, SelectRenderer::renderOption($this));
        $this->assertEquals("─ This option must implements " . ChoiceLabelInterface::class, SelectRenderer::renderOption($alphabeticalNode));
    }
}
