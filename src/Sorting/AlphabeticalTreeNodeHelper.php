<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Sorting;

/**
 * Alphabetical tree node helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Sorting
 */
class AlphabeticalTreeNodeHelper {

    /**
     * Create a choices.
     *
     * @param AlphabeticalTreeNodeInterface[] $choices The choices.
     * @return array Returns the choices.
     */
    public static function createChoices(array $choices) {

        // Initialize the output.
        $output = [];

        // Sort the nodes.
        $sorter = new AlphabeticalTreeSort($choices);
        $sorter->sort();

        // Handle each node.
        foreach ($sorter->getNodes() as $current) {

            // Get and check the path.
            $path = self::getPath($current);
            if (false === array_key_exists($path[0]->getAlphabeticalTreeNodeLabel(), $output)) {
                $output[$current->getAlphabeticalTreeNodeLabel()] = [];
            }
            if (1 === count($path)) {
                continue;
            }

            // Add the node.
            $output[$path[0]->getAlphabeticalTreeNodeLabel()][] = $current;
        }

        // Return the output.
        return $output;
    }

    /**
     * Get the level.
     *
     * @param AlphabeticalTreeNodeInterface $node The node.
     * @return integer Returns the level.
     */
    public static function getLevel(AlphabeticalTreeNodeInterface $node) {
        return count(self::getPath($node)) - 1;
    }

    /**
     * Get the path.
     *
     * @param AlphabeticalTreeNodeInterface $node The node.
     * @return array Returns the path.
     */
    public static function getPath(AlphabeticalTreeNodeInterface $node) {

        // Initialize the path.
        $path = [];

        // Save the node.
        $current = $node;

        // Handle each parent.
        do {
            array_unshift($path, $current);
            $current = $current->getAlphabeticalTreeNodeParent();
        } while (null !== $current);

        // Return the path.
        return $path;
    }

    /**
     * Remove orphan.
     *
     * @param AlphabeticalTreeNodeInterface[] $nodes The nodes.
     * @return void
     */
    public static function removeOrphan(array &$nodes = []) {
        do {
            $found = false;
            foreach ($nodes as $k => $v) {
                if (false === ($v instanceof AlphabeticalTreeNodeInterface) || null === $v->getAlphabeticalTreeNodeParent() || true === in_array($v->getAlphabeticalTreeNodeParent(), $nodes)) {
                    continue;
                }
                unset($nodes[$k]);
                $found = true;
            }
        } while (true === $found);
    }

}
